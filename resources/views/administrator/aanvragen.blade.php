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
    @if($data['alles']->count() > 0)
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
        @foreach($data['alles'] as $all)
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
