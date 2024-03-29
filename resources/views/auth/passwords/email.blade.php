@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group row mb-0"><h2 class="offset-md-2 col-md-6 display-5 mt-2 text-md-left">{{ __('Reset Wachtwoord') }}</h2></div>
    @include('messages')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group row mb-0">
            <label for="email" class="offset-md-2 col-md-2 col-form-label text-md-left">{{ __('E-Mail Adres') }}</label>
            
            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror   
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Stuur wachtwoord reset link') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
