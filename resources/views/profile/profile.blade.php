@extends('layout')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Hồ sơ của bạn</h1>
            <div class="row">
                <div class="col-md-6">
                    <h2>Thông tin cá nhân</h2>
                    <p>Tên người dùng:{{$thong_tin->username}} </p>
                    <p>Email:{{$thong_tin->email}} </p>
                    <p>Địa chỉ:{{$thong_tin->address}} </p>
                    <p>Số điện thoại: {{$thong_tin->phone}}</p>
                    <p>Ngày sinh:{{$thong_tin->dob }} </p>
                    <img src="" alt="Hình ảnh đại diện của ">
                    <a href="" class="btn btn-primary">Chỉnh sửa hồ sơ</a>
                </div>
                <div class="col-md-6">
                    <h2>Lịch sử mua hàng</h2>
                    <ul>
                        @forelse ()
                            <li>
                                <a href=""></a>
                            </li>
                        @empty
                            <li>Bạn chưa mua sản phẩm nào.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection