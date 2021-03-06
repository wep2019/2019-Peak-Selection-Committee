@extends('layouts.app')

@section('pageTitle', 'Login')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-self-center">
        <div class="col-md-4">
            <div class="card shadow-sm align-self-center">

                <div class="card-body">
                    <img src="images/logo.png" class="p-3" style="width: 300px;" alt="logo">
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        {{-- <div class="form-group{{ $errors-&gt;has('name') ? ' has-error' : '' }}"> --}}
                        <div class="form-group">                            
                            <input id="name" type="text" placeholder="Username" class="form-control" 
                                name="name" value="{{ old('name') }}" required>
                        
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>                            
                            @endif                            
                        </div>



                        {{-- <div class="form-group">
                            <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div> --}}

                        
                        <div class="form-group">
                            <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-0">
                            
                            {{-- <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button> --}}

                            <a href="{{url('/listCan')}}" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </a>
                            <hr>
                            <a class="nav-link text-center" href="{{ route('register') }}">
                                {{ __('Register New User') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
