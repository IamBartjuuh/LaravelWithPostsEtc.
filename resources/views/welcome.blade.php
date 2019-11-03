@extends('layouts.app')

@section('welkom')
<!--- Welkom stuk. -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Welkom op ComputerHulpHelmond!</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">
                ComputerHulpHelmond is er om mensen te helpen met hun computer problemen. Dit doen wij binnen en rondom helmond. Hier kun je contact zoeken met ons (zie de <a href="#wijzijn">persoonlijke pagina's</a>) maar bijvoorbeeld ook een afspraak maken. Voor meer informatie over onze
                werkzaamheden zie <a href="{{ route('tarieven') }}">Tarieven</a>. 
            </p>
        </div>
    </div>
</div>
<!--- Wat voor diensten we leveren -->
<div class="bg-blue pt-3 pb-3">
    <div class="container padding my-4">
        <div class="row padding mid">
            <div class="col-md-12 col-lg-8 informatie">
                <h2>Wat doen we en waarvoor komen wij?</h2>
                <p>Wij lossen vrijwel alle problemen op met computers, tv's en wifi. Om te kunnen garanderen dat we het probleem kunnen oplossen zie onze <a href="#wijzijn" style="color:white;"><i class="fas fa-hand-point-right"></i>persoonlijke pagina's</a>.</p>
                <h2>Contact opnemen??</h2>
                <p>We helpen u graag. Met de knop hieronder kun je contact aanvragen en of bellen en zelfs whatsappen.
                    Hier zullen wij ook zo spoedig mogelijk op reageren om u verder te helpen met het probleem.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-white-blue">Concact aanvragen.</a>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-4">
                <img src="img/problemen.png" class="img-fluid bart">
            </div>
        </div>
    </div>
</div>
<!--- Persoonlijke info -->
<div class="container-fluid padding my-4" id="wijzijn">
    <div class="row text-center padding">
        <div class="col-12">
            <h1 class="display-4">Wij zijn ...</h1>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="card col-xs-12 col-sm-10 col-md-8 mx-auto">
                <img class="card-img-top" src="{{ asset('img/avatar.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Bart</h5>
                    <p class="card-text">Info + persoonlijke button.</p>
                    <a href="{{ route('bart') }}" class="btn btn-primary">Bart's pagina</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="card col-xs-12 col-sm-10 col-md-8 mx-auto">
                <img class="card-img-top" src="{{ asset('img/avatar.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Rowen</h5>
                    <p class="card-text">Info + persoonlijke button.</p>
                    <a href="{{ route('rowen') }}" class="btn btn-primary">Rowen's pagina</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- Support aanvragen -->
{{-- <div class="bg-blue pt-3 pb-3">
    <div class="container padding my-4">
        <div class="row padding mid">
            <div class="col-md-12 col-lg-8 informatie">
                <h2>Problemen zonder kosten??</h2>
                <p>We helpen u graag. Hier onderkunt u contact aanvragen via onze website.
                    Hier zullen wij ook zo spoedig mogelijk op reageren om u verder te helpen met het probleem. Zorg dat je een account hebt of deze aanmaakt!
                </p>
                <a href="/contact" class="btn btn-white-blue">Concact aanvragen.</a>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-4">
                <img src="img/problemen.png" class="img-fluid bart">
            </div>
        </div>
    </div>
</div> --}}
<!--- Veiligheid --->
<div class="bg-blue pt-3 pb-3">
    <div class="container padding my-4">
        <div class="row padding mid">
            <div class="col-xs-12 col-md-12 col-lg-4 informatie">
                <img src="img/encrypted.png" class="img-fluid bart">
            </div>
            <div class="col-md-12 col-lg-8 informatie">
                <h2>U veiligheid is nummer 1!</h2>
                <p>Om ervoor te zorgen dat er niemand bij jouw persoonlijke gegevens kan komen. Hebben we een versleutelde database! Je wachtwoorden worden encrypted opgeslagen. Dit houd in dat wij je wachtwoord niet kunt lezen.</p>
            </div>
        </div>
    </div>
</div>
<!--- Social media -->
<div class="container-fluid padding my-4">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Sociale media!</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#URL"><i class="fab fa-facebook"></i></a>
            <a href="#URL"><i class="fab fa-google-plus-g"></i></a>
            <a href="#URL"><i class="fab fa-instagram"></i></a>
            <a href="#URL"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
@endsection