@extends('layouts.app', ['activePage' => 'detailsEmploye', 'title' => 'Gestion Des Salaires | Détails employe', 'navName' => 'Détails Employé', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                        <a href="{{ url()->previous() }}" class="btn btn-default">
                            <span class="nc-icon nc-stre-left"></i></span></a>
                        </div>

                        <div class="card-body">
                        <table class="table table-hover table-striped">
                                <thead>
                                    <th>Date</th>
                                    <th>Debut de séance</th>
                                    <th>Debut de pause</th>
                                    <th>Fin de pause</th>
                                    <th>Fin de séance</th>
                                </thead>
                                
                                <tbody>
                                @foreach ($pointages as $pointage)
        
                                    <tr>
                                    <td>{{ $pointage->dateSeance }}</td>
                                        <td>{{ $pointage->debutSeance }}</td>
                                        <td>{{ $pointage->debutPause }}</td>
                                        <td>{{ $pointage->finPause }}</td>
                                        <td>{{ $pointage->finSeance }}</td>
                                        
                                    </tr>
                                    @endforeach

                                    
</tbody>
</table>
                        </div></div>
                        
            </div>
        </div>
    </div>
@endsection








