@extends('layout')
@section('body')
    <div class="container">
        <h1>Sửa sản phẩm</h1>
        <form action="/product/update/{{$sua->id}}" method="post">
            @csrf
            @method('PUt')
            <input type="text" name="name" value="{{ $product->name }}" placeholder="Tên sản phẩm">
            <input type="text" name="description" value="{{ $product->description }}" placeholder="Mô tả sản phẩm">
            <input type="number" name="price" value="{{ $product->price }}" placeholder="Giá sản phẩm">
            <input type="number" name="quantity" value="{{ $product->quantity }}" placeholder="Số lượng">
            <button type="submit">Sửa sản phẩm</button>
        </form>
    </div>
@endsection