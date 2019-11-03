@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Contact.</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">
                Hier kun je direct contact met ons opnemen door te bellen, whatsappen of het aan te vragen op de site. Je kunt op de site vragen stellen over problemen die je digitaal opgelost wilt hebben. Er worden hier geen kosten bij verrekend*. Deze aanvraag stuurt direct een mail naar U als bevestiging en naar ons als ontvangst. Wij proberen zo snel mogelijk te reageren.
            </p>
        </div>
    </div>
</div>
<div class="bg-blue pt-3 pb-3">
    <div class="container padding my-4">
        <div class="row padding mid">
            <div class="col-md-12 col-lg-8">
                <h2>Contact opnemen.</h2>
                <p><b>Bellen of whatsappen (sms mag ook):</b> Je kunt ons bellen en whatsappen. We kunnen altijd reageren op whatsapp en sms. Bellen in het weekend. Ons 06 nummer is: 0612345678</p>
                <p><b>Via onze website:</b> Je kunt ook contact opnemen via de website. Klik <a href="/aanvraag" style="color:white;">hier</a> om contact op te nemen via onze site. Zorg dat je een account hebt!</p>
                <a href="/aanvraag" class="btn btn-white-blue">Ticket aanmaken.</a>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-4">
                <img src="img/slaapproblemen.png" class="img-fluid bart">
            </div>
        </div>
    </div>
</div>
<div class="container my-1">
<small>* Als na het geven van support blijkt dat er een afspraak gemaakt moet worden worden er kosten verrekend!</small>
</div>
@endsection