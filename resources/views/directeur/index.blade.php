@extends('layouts.app', ['activePage' => 'liste_employes', 'title' => 'Gestion Des Salaires | Liste des employés', 'navName' => 'Liste des employés', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <!-- <h4 class="card-title">Liste des employés</h4> -->



                            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav mr-auto">
               
            </ul>
            <ul class="navbar-nav   d-flex align-items-center">

            
              
            </ul>
        </div>
    </div>
</nav>



                            <table id="example" class="table table-hover table-striped">
                                <thead>
                                    <th>Matricule</th>
                                    <th>Nom et Prénom(s)</th>
                                    <th>Service</th>
                                    <th>Catégorie</th>
                                </thead>
                                
                                <tbody>
                                @foreach ($employes as $employe)
        
                                    <tr>
                                        <td>{{ $employe->matricule }}</td>
                                        <td>{{ $employe->nom_prenoms }}</td>
                                        <td>{{ $employe->service }}</td>
                                        <td>{{ $employe->categorie }}</td>
                                    </tr>
                                    @endforeach

                                    
</tbody>
</table>


</div>
                                   
@endsection