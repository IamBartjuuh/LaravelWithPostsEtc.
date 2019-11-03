@extends('layouts.app')

@section('content')
<div class="form-group row mb-0"><h2 class="offset-md-2 col-md-2 display-5 mt-2 text-md-left">Aanvraag.</h2></div>
@include('messages')
<form action="/aanvraag" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group row mb-0">
        <label for="naam" class="offset-md-2 col-md-2 col-form-label text-md-left">Naam:</label>
        
        <div class="col-md-6">
        <input type="text" maxlength="100" name="naam" id="aanvrager" class="form-control"  required value="{{ Auth::user()->name }}">
        </div>
    </div>
    <div class="form-group row mb-0">
        <label for="email" class="offset-md-2 col-md-2 col-form-label text-md-left">E-mailadres:</label>
        
        <div class="col-md-6">
        <input type="email" maxlength="100" name="email" id="email" class="form-control" required value="{{ Auth::user()->email }}">
        </div>
    </div>
    <div class="form-group row mb-0">
        <label for="Soortproblemen" class="offset-md-2 col-md-2 col-form-label text-md-left">Soort probleem:</label>
        
        <div class="col-md-6">
            <select class="form-control" id="Soortproblemen" name="Soortproblemen">
                @foreach (\App\Enums\SoortProbleem::getKeys() as $problemcheck)
                <option value= "{{$problemcheck}}">{{$problemcheck}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row mb-0">
        <label for="beschrijving" class="offset-md-2 col-md-2 col-form-label text-md-left">Omschrijving:</label>
        
        <div class="col-md-6">
            <textarea name="beschrijving" id="beschrijving" class="form-control" id="exampleFormControlTextarea1" maxlength="500" rows="3" required></textarea>
        </div>
    </div>
    <div class="form-group row">
            <label for="submit" class="col-md-4 col-form-label text-md-left"></label>
        <div class="col-md-6">  
        <button type="submit" id="submit" class="btn btn-primary">
            {{ __('Aanvragen') }}
        </button>
        </div>
    </div>
</form>
</div>
@endsection