@extends('layout')
@section('body')
    
    <section class="login-form">
        <div class="content">
            <a href="#" class="logo">GENZ</a>
            <h2>Welcome</h2>
            <h3>To Our New Website</h3>
            <pre>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, vero!
            </pre>
            <div class="icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
        </div>
        <div class="login">
            <h2>Sign In</h2>
            <form action="/user/login" method="POST">
                @csrf
                <div class="input">
                    <input  type="email" id="email" name="email" class="form-control input-1 @error('email') is-invalid @enderror">
                    <i class="fa-solid fa-envelope"></i>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @endif
                    
                </div>
                <div class="input">
                    <input class="input-1" type="password" id="password" name="password" class="form-control input-1 @error('password') is-invalid @enderror" >
                    <i class="fa-solid fa-lock"></i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="check">
                    <label for="remember">Remember Me</label>
                    <input type="checkbox" name="remember" id="remember" >
                    </div>
                    <a href="#">Forgot Passwword?</a>
                    <div class="button">
                        <button class="btn" type="submit">Sign In</button>
                    </div>
                    <div class="sign-up">
                        <a>Don't have an account?</a>
                        <a href="">sign up</a>
                    </div>
            </form>
        </div>
    </section>
@endsection