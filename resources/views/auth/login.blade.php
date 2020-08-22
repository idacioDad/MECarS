@extends('layouts.front')

@section('content')
<div class="inner-head overlap">
            <div style="background: url('{{asset('assets/img/parallax1.jpg')}}')" class="parallax scrolly-invisible no-parallax"></div>
            <!-- PARALLAX BACKGROUND IMAGE -->	
            <div class="container">
                <div class="inner-content">
                    <span><i class="fa fa-bolt"></i></span>
                    <h2>LOGIN PAGE</h2>
                    <ul>
                        <li><a href="#" title="">HOME</a></li>
                        <li><a href="#" title="">LOGIN PAGE</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head -->
</div>
            <section class="block">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-6">
                            <div class="account-user">
                                <!--div class="logo">
                                    <a href="#" title="">
                                    <span><img src="{{asset('assets/img/logo.png')}}"></span>
                                        <strong>Facilidade e Rapidez</strong>
                                    </a>
                                </div><-- LOGO -->
                                <form method="POST" action="{{ route('login') }}">
                                @csrf

                                    <h1>Login</h1>
                                    <div class="field">
                                            <input id="email" placeholder="Seu Email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="field">

                                            <input id="password" type="password" placeholder="Your Password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="field">
                                        <input type="submit" value="Submeter" class="flat-btn" />
                                    </div>
                                </form>
                                <i>OR</i>
                                <span>LOGIN WITH</span>
                                <ul class="social-btns">
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                </ul>
                                <label>
                                        <spam>Se ainda não tem uma conta, registe-se  <a href="{{ route('register') }}" title="">Aqui</a></span>
                                    </label>
                            </div>
                        </div>
                        
                    </div>
                    </section>
                

@endsection
