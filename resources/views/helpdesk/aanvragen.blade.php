@extends('layouts.app')

@section('content')
@include('messages')
<div class="row welcome text-center">
    <div class="col-12">
        <h1 class="display-4">Aanvragen van {{ Auth::user()->name }}.</h1>
    </div>
    <hr style="width: 60em;">
    <div class="container row">
      <div class="col-md-2"></div>
      <div class="col-md-8 col-sm-12">
          <p class="lead">
              @if($data['count'] < 2)
              U heeft {{$data['count']}} aanvraag.
              @else
              U heeft {{$data['count']}} aanvragen.
              @endif
          </p>
      </div>
      <div class="col-md-2"><a href="/aanvraag" class="btn btn-primary">Ticket aanmaken.</a></div>
    </div>  
</div>
<div class="container">
@if($data['aangevraagd']->count() > 0)
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Naam aanvrager</th>
        <th scope="col">Probleem met</th>
        <th scope="col">Omschrijving / Bericht</th>
        <th scope="col">Buttons</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data['aangevraagd'] as $all)
      <tr>
        <th scope="row">{{$all->naam}}</th>
        <td>{{App\Enums\SoortProbleem::getKey($all->Soortproblemen)}}</td>
        <td>{{$all->beschrijving}}</td>
        <td><a href="/hulppagina/{{$all['id']}}"><button type="button" class="btn btn-primary">Bekijk aanvraag</button></a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
  @else
  <p>Er zijn geen aanvragen.</p>
  @endif
</div>
@endsection