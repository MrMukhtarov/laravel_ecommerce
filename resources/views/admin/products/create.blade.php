@include('admin.layouts.includes.head');
@section('title', 'Admin Product Create')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Create Product</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.signup') }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input value="{{old('title')}}" class="form-control" id="inputFirstName" name="title"
                                                    type="text" placeholder="Enter Title"
                                                     required />
                                                <label for="inputFirstName">Title</label>
                                            </div>
                                        </div>
                                        @if ($errors->has('title'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->get("title") as $message)
                                                    <li>{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input value="{{old('productCode')}}" class="form-control" id="inputFirstName" name="productCode"
                                                    type="text" placeholder="Enter productCode"
                                                     required />
                                                <label for="inputFirstName">productCode</label>
                                            </div>
                                        </div>
                                        @if ($errors->has('productCode'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->get("productCode") as $message)
                                                    <li>{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input value="{{old('stockCount')}}" class="form-control" id="inputFirstName" name="stockCount"
                                                    type="text" placeholder="Enter stockCount"
                                                     required />
                                                <label for="inputFirstName">stockCount</label>
                                            </div>
                                        </div>
                                        @if ($errors->has('stockCount'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->get("stockCount") as $message)
                                                    <li>{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input value="{{old('price')}}" class="form-control" id="inputFirstName" name="price"
                                                    type="text" placeholder="Enter price"
                                                     required />
                                                <label for="inputFirstName">price</label>
                                            </div>
                                        </div>
                                        @if ($errors->has('price'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->get("price") as $message)
                                                    <li>{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input value="{{old('discountPercent')}}" class="form-control" id="inputFirstName" name="discountPercent"
                                                    type="text" placeholder="Enter discountPercent"
                                                     required />
                                                <label for="inputFirstName">discountPercent</label>
                                            </div>
                                        </div>
                                        @if ($errors->has('discountPercent'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->get("discountPercent") as $message)
                                                    <li>{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input value="{{old('text')}}" class="form-control" id="inputFirstName" name="text"
                                                    type="text" placeholder="Enter text"
                                                     required />
                                                <label for="inputFirstName">text</label>
                                            </div>
                                        </div>
                                        @if ($errors->has('text'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->get("text") as $message)
                                                    <li>{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input value="{{old('description')}}" class="form-control" id="inputFirstName" name="description"
                                                    type="text" placeholder="Enter description"
                                                     required />
                                                <label for="inputFirstName">description</label>
                                            </div>
                                        </div>
                                        @if ($errors->has('description'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->get("description") as $message)
                                                    <li>{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- image --}}
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input value="{{old('mainImageUrl')}}" class="form-control" id="inputFirstName" name="mainImageUrl"
                                                    type="file" placeholder="Enter mainImageUrl"
                                                     required />
                                                <label for="inputFirstName">mainImageUrl</label>
                                            </div>
                                        </div>
                                        @if ($errors->has('mainImageUrl'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->get("mainImageUrl") as $message)
                                                    <li>{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- image --}}
                                    {{-- category --}}
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-center gap-3">
                                                <label for="inputFirstName">Category</label>
                                                <select name="" id="">
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @if ($errors->has('mainImageUrl'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->get("mainImageUrl") as $message)
                                                    <li>{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="d-flex gap-3">
                                                <label for="inputFirstName">Sub Category</label>
                                                <select name="" id="">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                        </div>
                                        @if ($errors->has('mainImageUrl'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->get("mainImageUrl") as $message)
                                                    <li>{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button class="btn btn-primary btn-block"
                                                type="submit">Create Product</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@include('admin.layouts.includes.foot')
