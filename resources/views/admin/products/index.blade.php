@extends('admin.layouts.app')
@section('title', 'Admin | Products')
@section('content')
@push('css')
    <style>
        td,th{
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }
    </style>
@endpush
<main>
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4">Tables</h1>
        <a class="btn btn-sm btn-primary" href="{{route('admin.products.create')}}">Create</a>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Products</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Main Image</th>
                            <th>Title</th>
                            <th>Tax</th>
                            <th>Code</th>
                            <th>Point</th>
                            <th>Stock</th>
                            <th>In Stock</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Text</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Slug</th>
                            <th>Create Date</th>
                            <th>Update Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($products as $product)
                       <tr>
                        <td>{{$product->id}}</td>
                        <td><img style="width: 100px; height:100px;" src="{{$product->mainImageUrl}}" alt=""></td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->taxPercent}}%</td>
                        <td>{{$product->productCode	}}</td>
                        <td>{{$product->rewardPoint	}}</td>
                        <td>{{$product->stockCount	}}</td>
                        <td>{{$product->inStock == 1 ? 'Stock' : "Out of stock" }}</td>
                        <td>{{$product->price}}$</td>
                        <td>{{$product->discountPercent}}%</td>
                        <td>{{Str::substr($product->text, 0, 20)}}...</td>
                        <td>{{Str::substr($product->description, 0, 20)}}...</td>
                        <td>{{$product->cat($product->id )}}</td>
                        <td>{{$product->sub_cat($product->id)}}</td>
                        <td>{{$product->slug}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="">Update</a>
                            <a class="btn btn-sm btn-danger" href="">Delete</a>
                            <a class="btn btn-sm btn-primary" href="">Comments</a>
                        </td>
                    </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection