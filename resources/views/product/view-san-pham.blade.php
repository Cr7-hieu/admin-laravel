@extends('layout')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p>{{ $product->price }}</p>
            <img src="{{ $product->image }}" alt="{{ $product->name }}">
            <a href="">Quay lại</a>
        </div>
    </div>
</div>
@endsection