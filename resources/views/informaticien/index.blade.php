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
                <li class="nav-item">
                    <a href="#" class="btn btn-default" data-toggle="dropdown"> Ajouter un employé
                        <!-- <i class="nc-icon nc-palette"></i>
                        <span class="d-lg-none">{{ __('Nouvel employé') }}</span> -->
                    </a>
                </li>

            </ul>
            <ul class="navbar-nav   d-flex align-items-center">

            <form action="/search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="d-flex form-control" name="q" style="width: 300px; height : 49px;  margin-top : 15px"
                        placeholder="Rechercher des employés"> <span class="input-group-btn">
                        <a type="submit" class="btn btn-default">
                            <span class="nc-icon nc-zoom-split"></i></span>
</a>
                    </span>
                </div>
            </form>


         
                
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="no-icon">{{ __('Dropdown') }}</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">{{ __('Action') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Another action') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Something') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Something else here') }}</a>
                        <div class="divider"></div>
                        <a class="dropdown-item" href="#">{{ __('Separated link') }}</a>
                    </div>
                </li> -->
              
            </ul>
        </div>
    </div>
</nav>




                            <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Prénom(s)</th>
                                    <th>Salaire / H</th>
                                    <th>Volume horaire</th>
                                </thead>
                                
                                <tbody>
                                @foreach ($employes as $employe)
        
                                    <tr>
                                        <td>{{ $employe->matricule }}</td>
                                        <td>{{ $employe->nom }}</td>
                                        <td>{{ $employe->prenoms }}</td>
                                        <td>{{ $employe->salaire_par_heure }}</td>
                                        <td>{{ $employe->volume_horaire }}</td>
                                    </tr>
                                    @endforeach
</tbody>
</table>
</div>
                                   
@endsection