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
                                </div>-- LOGO -->
                                <h1>Cadastrar-se</h1>
                                <form method="POST" action="{{ route('register') }}">
                                @csrf
                                
                                    <div class="field">
                                         <input id="name" placeholder="Username" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        
                                         <input id="email" type="email" placeholder="Seu Email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="field">

                                        <input id="password" type="password" placeholder="Type Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                         <input id="password-confirm" type="password" placeholder="Retype Password"  class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>                                   
                                    <label>
                                        <input type="checkbox" /> By Clicking on this You are agree with our <a href="#" title="">Terms & Condition</a>
                                    </label>
                                    <input type="submit" value="Registar" class="flat-btn" />
                                </form>
                               
                            </div>
                        </div>
                        
                    </div>
            </section>                

@endsection
