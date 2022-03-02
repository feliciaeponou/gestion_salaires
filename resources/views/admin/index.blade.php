@extends('layouts.app', ['activePage' => 'liste_users', 'title' => 'Gestion Des Salaires | Liste des utilisateurs', 'navName' => 'Liste des utilisateurs', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header">
                            <!-- <h4 class="card-title">Liste des utilisateurs</h4> -->
                           
                         


                            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                                <div class="container-fluid">
                                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-bar burger-lines"></span>
                                        <span class="navbar-toggler-bar burger-lines"></span>
                                        <span class="navbar-toggler-bar burger-lines"></span>
                                    </button>
                                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                                        <a href="#" class="btn btn-warning" data-toggle="dropdown"> Ajouter un employé
                                            <i class="nc-icon nc-add"></i>
                                            <span class="d-lg-none">{{ __('Nouvel employé') }}</span> 
                                        </a>
                                    </div>
                                </div>
                            </nav>
                        </div> 
                        <div class="card-body  table-responsive">

                            <table id="example" class="table table-hover table-striped">
                                <thead>
                                    <th>Matricule</th>
                                    <th>Nom et Prénom(s)</th>
                                    <th>Email</th>
                                    <th>Rôle</th>
                                    <th></th>
                                </thead>
                                
                                <tbody>
                                @foreach ($users as $user)
        
                                    <tr>
                                        <td>{{ $user->matricule }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td style="text-transform : uppercase">{{ $user->role }}</td>
                                        <td><a href="{{ route('detailsUserAdmin', $user->matricule) }}" class="btn btn-default">
                            <span class="nc-icon nc-single-02"></i></span></a></td>
                                    </tr>
                                    @endforeach

                                    
</tbody>
</table>

</div>
                                   
@endsection