@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mt-2">
    @include('messages')
    </div>
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Welkom @if( Auth::user()->rol != 0)stafflid, @endif{{ Auth::user()->name }}</h1>
        </div>
        <hr>
    @if( Auth::user()->rol == 0)
        <div class="col-12">
            <p class="lead">
               Op deze pagina heb je je overzicht van je account. Druk <a href="/aanvragen/{{Auth::user()->id}}">hier</a> voor al u aanvragen.
            </p>
        </div>
    </div>
    <div class="form-group row mb-0"><h2 class="offset-md-2 col-md-2 display-5 mt-2 text-md-left">Gebruikersgegevens.</h2></div>
    <div class="form-group row mb-0">
        <label for="naam" class="offset-md-2 col-md-2 col-form-label text-md-left">(gebruikers)naam:</label>
        
        <div class="col-md-6">
        <input type="text" maxlength="100" name="naam" id="aanvrager" class="form-control" value="{{ Auth::user()->name }}" disabled>
        </div>
    </div>
    <div class="form-group row mb-0">
        <label for="naam" class="offset-md-2 col-md-2 col-form-label text-md-left">Email adres:</label>
        
        <div class="col-md-6">
        <input type="text" maxlength="100" name="naam" id="aanvrager" class="form-control" value="{{ Auth::user()->email }}" disabled>
        </div>
    </div>
    <div class="form-group row mb-0">
        <label for="naam" class="offset-md-2 col-md-2 col-form-label text-md-left"></label>
        
        <div class="col-md-6">
            <a href="/user/{{Auth::user()->id}}/aanpassen"><button type="button" class="btn btn-primary">Aanpassen</button></a>
        </div>
    </div>
    @else
    <div class="form-group row mb-0"><h2 class="offset-md-2 col-md-2 display-5 mt-2 text-md-left">Administator.</h2></div>
    <div class="col-12">
        <p class="lead">
           Om alle aanvragen van klanten te zien druk <a href="/admin/aanvragen">hier</a> voor alle aanvragen.
        </p>
    </div>
    @endif
</div>
@endsection
