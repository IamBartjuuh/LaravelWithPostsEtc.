@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mt-2">
    @include('messages')
    </div>
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Onze tarieven</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">
               Hier staan onze tarieven vermeld voor onze aangeboden hulp.
            </p>
        </div>
    </div>
</div>
<div class="bg-blue pt-3 pb-3">
    <div class="container padding my-4">
        <div class="row padding mid">
            <div class="col-md-12 col-lg-8">
                <h2>Een bezoek.</h2>
                <p><b>Voorrijkosten:</b> Afhankelijk van de afstand die we afleggen verrekenen we kosten. De Voorrijkosten tot 5km is dit €2 van 5 tot 10km is dit €3. Boven de 10km graag in overleg.*</p>
                <p><b>Bezoekkosten:</b> Per kwartier rekenen €4 en per uur krijg je 1 kwartier kado. Wat in houd dat je €12 per uur betaalt.</p>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-4">
                <img src="img/src.png" class="img-fluid bart">
            </div>
        </div>
    </div>
</div>
<div class="pt-3 pb-3">
    <div class="container padding my-4">
        <div class="row padding mid">
            <div class="col-xs-12 col-md-12 col-lg-4">
                <img src="img/src.png" class="img-fluid bart">
            </div>
            <div class="col-md-12 col-lg-8">
                <h2>PC assemblage/schoonmaken.</h2>
                <p><b>Schoonmaak-kosten:</b> Videokaart schoonmaken: €10. Behuizing en pc fans schoonmaken: €15. Nieuwe koelpasta (wordt geplaatst): €5. Een groteschoonmaak die alle voorgaande dingen combineerd kost: €25.**</p>
                <p><b>Assemblage-kosten:</b> Wij zetten uw pc in elkaar voor €50. Als we er langer dan 2,5uur overdoen krijg je €5 korting.***</p>
            </div>
        </div>
        <small>* Kijk bij contact om contact op te nemen voor de voorrijkosten.</small><br>
        <small>** Wil je grote-schoonmaak zonder een van de 3 keuzes dit kan in overleg.</small><br>
        <small>*** PC assemblage is op eigenrisico. Als we schade aanbregen of er iets kapot gaat zijn we niet aansprakelijk!!</small>
    </div>
</div>
@endsection