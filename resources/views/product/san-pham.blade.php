@extends('layout')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Danh sách sản phẩm</h1>

            @foreach ($products as $product)
                <div class="product">
                    <h2>{{ $product -> name}}</h2>
                    <p>{{ $product ->}}</p>
                    <p>{{$product -> }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection