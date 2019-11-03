@extends('layouts.app')

@section('content')
@include('messages')
<div class="row welcome text-center">
    <div class="col-12">
        <h1 class="display-4">Aanvragen van {{ Auth::user()->name }}.</h1>
    </div>
    <hr>
    <div class="col-12">
        <p class="lead">
            @if($data['count'] < 2)
            U heeft {{$data['count']}} aanvraag.
            @else
            U heeft {{$data['count']}} aanvragen.
            @endif
        </p>
    </div>
</div>
<div class="container">
@foreach($data['aangevraagd'] as $aanvraag)
<div class="card col-md-4 col-sm-12">
    <div class="card-body">
    <h5 class="card-title">Probleem: {{App\Enums\SoortProbleem::getKey($aanvraag->Soortproblemen)}}</h5>
    <p class="card-text">Beschrijving: {{$aanvraag->beschrijving}}</p>
    <a href="/hulppagina/{{$aanvraag['id']}}"><button type="button" class="btn btn-primary">Bekijk aanvraag</button></a>
    </div>
</div>
@endforeach
</div>
@endsection