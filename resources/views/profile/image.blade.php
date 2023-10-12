@extends('layout')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset(ProfileImage::where('user_id', Auth::user()->id)->first()->path) }}" alt="Hình ảnh đại diện của {{ Auth::user()->name }}">
            </div>
            <div class="col-md-6">
                <form action="{{ route('profile.image.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
    
                    <div class="form-group">
                        <label for="image">Ảnh đại diện</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
    
                    <button type="submit" class="btn btn-primary">Tải lên</button>
                </form>
            </div>
        </div>
    </div>
@endsection