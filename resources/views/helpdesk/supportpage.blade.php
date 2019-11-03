@extends('layouts.app')

@section('content')
<div class="container mt-2">
    @include('messages')
    <div class="row welcome text-center">
    <div class="col-12 p-0">
        <h1 class="display-5">Aanvraag van {{ Auth::user()->name }}.</h1>
    </div>
    </div>
    <hr>
    <div class="card mb-2">
        <div class="card-body">
        <h5 class="card-title">{{$data['aanvraag']->naam}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Probleem met: {{App\Enums\SoortProbleem::getKey($data['aanvraag']->Soortproblemen)}}</h6>
        <p class="card-text"><pre>{{$data['aanvraag']->beschrijving}}</pre></p>
        </div>
    </div>
    @foreach ($data['reactie'] as $reactie)
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <h5 class="card-title col align-self-start">{{$reactie->naam}}</h5> 
                @if(Auth::user()->name == $reactie->naam)
                <form action="/verwijder/reactie/{{$reactie['id']}}" style="display: inline;" method="POST">
                    @csrf
                    <button type="button" class="btn btn-danger align-right btn-sm col align-self-end" data-toggle="modal" data-target="#Delete{{$reactie['id']}}"><i class="fas fa-trash-alt"></i> Verwijder</button>
                    <div class="modal fade" id="Delete{{$reactie['id']}}" tabindex="-1" role="dialog" aria-labelledby="DeleteLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="DeleteLabel" style="color: #e33d3d;">Weet je het zeker?</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <b>{{$reactie->naam}}</b>, weet je zeker dat je je reactie wilt verwijderen?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Nee</button>
                                <button type="submit" class="btn btn-success">Ja</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
                @endif
            </div>
            <p class="card-text"><pre>{{$reactie->reactie}}</pre></p>
        </div>
    </div>
    @endforeach
    <form action="/hulppagina/{{$data['aanvraag']->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row mb-0">
            <label for="naam" class="offset-md-2 col-md-2 col-form-label text-md-left">Naam:</label>
            
            <div class="col-md-6">
            <input type="text" maxlength="100" name="naam" id="aanvrager" class="form-control"  required value="{{ Auth::user()->name }}">
            </div>
        </div>
        <div class="form-group row mb-0">
            <label for="reactie" class="offset-md-2 col-md-2 col-form-label text-md-left">Reactie:</label>
            
            <div class="col-md-6">
                <textarea name="reactie" id="reactie" class="form-control" id="exampleFormControlTextarea1" maxlength="500" rows="3" required></textarea>
            </div>
        </div>
        <div class="form-group row">
                <label for="submit" class="col-md-4 col-form-label text-md-left"></label>
            <div class="col-md-6">  
            <button type="submit" id="submit" class="btn btn-primary">
                {{ __('Reageer') }}
            </button>
            </div>
        </div>
    </form>
</div>
@endsection