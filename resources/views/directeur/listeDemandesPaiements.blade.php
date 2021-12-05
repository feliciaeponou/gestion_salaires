@extends('layouts.app', ['activePage' => 'listeDemandesPaiements', 'title' => 'Gestion Des Salaires | Liste des demandes de paiements', 'navName' => 'Liste des demandes de paiement', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-body  table-responsive">

                        @include('sweetalert::alert')
                            <table id="example" class="table table-hover table-striped">
                                <thead>
                                    <th>Matricule</th>
                                    <th>Nom & Prénom(s)</th>
                                    <th>Date Debut</th>
                                    <th>Date Fin</th>
                                    <th>Nombre Séances</th>
                                    <th>Volume horaire Total</th>
                                    <th>Coût Total</th>
                                    <th>Validé</th>
                                    <th>Rejeté</th>
                                    <th>Payé</th>
                                    <th></th>
                                </thead>
                                
                                <tbody>
                                @foreach ($demandePaiements as $demandePaiement)
        
                                    <tr>
                                        <td>{{ $demandePaiement->matricule }}</td>
                                        <td>{{ $demandePaiement->nom_prenoms }}</td>
                                        <td>{{ $demandePaiement->dateDebut }}</td>
                                        <td>{{ $demandePaiement->dateFin }}</td>
                                        <td>{{ $demandePaiement->nbSeances }}</td>
                                        <td>{{ $demandePaiement->volumeHoraireTotal }}</td>
                                        <td>{{ $demandePaiement->coutTotal  }} FCFA</td>
                                        <td>@if ($demandePaiement->valide=="non") Non @elseif  ($demandePaiement->valide == "oui") Oui @endif</td>
                                        <td>@if ($demandePaiement->rejete=="non") Non @elseif  ($demandePaiement->rejete == "oui") Oui @endif</td>
                                        <td>@if ($demandePaiement->paye=="non") Non @elseif  ($demandePaiement->paye == "oui") Oui @endif</td>
                                        <td>@if ($demandePaiement->paye=="non") <a href="{{ route('payerDemandePaiement', $demandePaiement->id) }}" class="btn btn-default">
                            Payer</a> @endif</td>
                                        
                                    </tr>
                                    @endforeach

                                    
</tbody>
</table>

</div>
                                   
@endsection