@extends('layout')
@section('body')
    <div class="container">
        <h1>Tạo sản phẩm</h1>
        <form action="/product/create" method="post">
            @csrf
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Tên sản phẩm">
            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Mô tả sản phẩm">
            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Giá sản phẩm">
            <input type="number" class="form-control @error('quantily') is-invalid @enderror" name="quantity" placeholder="Số lượng">
            <button type="submit">Tạo sản phẩm</button>
        </form>
    </div>
@endsection