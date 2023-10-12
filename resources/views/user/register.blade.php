@extends('layout')
@section('body')
<div class="background"></div>
<section>
    <div class="container">
        <div class="register-form">
            <form action="/user/register" method="POST" class="register">
                <h2>Register</h2>
                <div class="make">
                    <label for="name" class="form-label">Name</label>
                    <input type="text"  class="form-control input-2  @error('name') is-invalid @enderror" id="name">
                </div>
                <div class="make">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control input-2  @error('email') is-invalid @enderror" id="email">
                </div>
                <div class="make">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control input-2  @error('password') is-invalid @enderror" id="password">
                </div>
                <div class="date">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control  @error('birthday') is-invalid @enderror" id="birthday" >
                </div>
                <div class="check-make">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Agree to the terms
                    </label>
                </div>
                <div>
                    <button class="btn" type="submit">
                        Register
                    </button>
                </div>
            </form>
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
    
</section>
@endsection