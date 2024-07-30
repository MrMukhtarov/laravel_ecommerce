@extends('front.layouts.master')
@section('title', 'Home')

@section('content')
    @include('front.home.partials.slider')
    @include('front.home.partials.category')
    @include('front.home.partials.promotion')
    @include('front.home.partials.product_model')
    @include('front.home.partials.brand')
@endsection


