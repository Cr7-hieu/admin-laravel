@extends('layout')
@section('body')
    <div class="container">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Tên người dùng</label>
                <input type="text" class="form-control" id="username" name="username" value="{{$profile->username}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$profile->email}}">
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$profile->address}}">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{$profile->phone}}">
            </div>
            <div class="form-group">
                <label for="dob">Ngày sinh</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{$profile->dob}}">
            </div>
            <div class="form-group">
                <label for="image">Ngày sinh</label>
                <input type="file" class="form-control" id="image" name="image" value="{{$profile->image}}">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật hồ sơ</button>
        </form>
    </div>
@endsection