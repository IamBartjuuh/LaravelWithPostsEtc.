@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mt-2">
    @include('messages')
    </div>
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Alle aanvragen.</h1>
        </div>
    </div>
        <hr>
    <div class="container">
        <div class="row">
        @foreach($data['alles'] as $all)
        <div class="card col-md-4 col-sm-12 m-1">
            <div class="card-body">
            <h5 class="card-title">Aanvrager: {{$all->naam}}</h5>
            <p class="card-text mb-0">Probleem: {{App\Enums\SoortProbleem::getKey($all->Soortproblemen)}}</p>
            <p class="card-text">Omschrijving: {{$all->beschrijving}}</p>
            <a href="/hulppagina/{{$all['id']}}"><button type="button" class="btn btn-primary">Bekijk aanvraag</button></a>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
