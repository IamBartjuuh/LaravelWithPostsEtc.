@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group row mb-0"><h2 class="offset-md-1 col-md-3 display-5 mt-2 text-md-left">{{ __('Register') }}</h2></div>
    @include('messages')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group row mb-0">
            <label for="name" class="offset-md-1 col-md-3 col-form-label text-md-left">{{ __('Naam') }}</label>
            
            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
            </div>
        </div>
        <div class="form-group row mb-0">
            <label for="email" class="offset-md-1 col-md-3 col-form-label text-md-left">{{ __('E-Mail Adres') }}</label>
            
            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-0">
            <label for="password" class="offset-md-1 col-md-3 col-form-label text-md-left">{{ __('Wachtwoord') }}</label>
            
            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-0">
            <label for="password-confirm" class="offset-md-1 col-md-3 col-form-label text-md-left">{{ __('Herhaal Wachtwoord') }}</label>
            
            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
