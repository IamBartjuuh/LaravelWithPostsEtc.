@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group row mb-0"><h2 class="offset-md-2 col-md-2 display-5 mt-2 text-md-left">Gebruikersgegevens.</h2></div>
    @include('messages')
    <form method="POST" action="/user/{{Auth::user()->id}}/aanpassen">
        @csrf
        <div class="form-group row mb-0">
            <label for="naam" class="offset-md-2 col-md-2 col-form-label text-md-left">(gebruikers)naam:</label>
            
            <div class="col-md-6">
            <input type="text" maxlength="100" name="naam" id="aanvrager" class="form-control" value="{{ Auth::user()->name }}" required>
            </div>
        </div>
        <div class="form-group row mb-0">
            <label for="email" class="offset-md-2 col-md-2 col-form-label text-md-left">Email adres:</label>
            
            <div class="col-md-6">
            <input type="text" maxlength="100" name="email" id="aanvrager" class="form-control" value="{{ Auth::user()->email }}" required>
            </div>
        </div>
        <div class="form-group row mb-0">
            <label for="naam" class="offset-md-2 col-md-2 col-form-label text-md-left"></label>
            
            <div class="col-md-6">
                <button type="submit" id="submit" class="mr-auto btn btn-primary">
                    {{ __('Aanpassen') }}
                </button>
            </div>
        </div>
        </div>
    </form>
</div>
@endsection