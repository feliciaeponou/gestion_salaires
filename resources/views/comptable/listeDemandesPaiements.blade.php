@extends('layouts.app', ['activePage' => 'listeDemandesPaiements', 'title' => 'Gestion Des Salaires | Liste des demandes de paiements', 'navName' => 'Liste des demandes de paiement', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                       
                        <div class="card-body  table-responsive">
                      

                        @include('alerts.success')
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Matricule</th>
                                    <th>Periode</th>
                                    <th>Nombre Séances</th>
                                    <th>Volume horaire Total</th>
                                    <th>Coût Total</th>
                                </thead>
                                
                                <tbody>
                                @foreach ($demandePaiements as $demandePaiement)
                                
        
                                    <tr>
                                        <td>{{ $demandePaiement->matricule }}</td>
                                        <td>{{ $demandePaiement->periode }}</td>
                                        <td>{{ $demandePaiement->nbSeances }}</td>
                                        <td>{{ $demandePaiement->volumeHoraireTotal }}</td>
                                        <td>{{ $demandePaiement->coutTotal  }} FCFA</td>
                                        
                                    </tr>
                                    @endforeach

                                    
</tbody>
</table>

</div>
                                   
@endsection