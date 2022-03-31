@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Register</h4>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-3">
                            <label for="name">Name</label>
                            </div>

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                            <label for="email">{{ __('Email Address') }}</label>
                            </div>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-md-3">
                            <label for="password">{{ __('Password') }}</label>
                            </div>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">                            
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            </div>
                            
                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required autocomplete="new-password">
                           
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-success btn-sm"><i
                                    class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
