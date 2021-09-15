@extends('layouts.app', ['activePage' => 'liste_employes', 'title' => 'Gestion Des Salaires | Liste des employés', 'navName' => 'Table List', 'activeButton' => 'laravel'])

@section('content')
    <!--  <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Liste des employés</h4>
                            <p class="card-category">Here is a subtitle for this table</p> 
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
                                     <tr>
                                        <td>2</td>
                                        <td>Minerva Hooper</td>
                                        <td>$23,789</td>
                                        <td>Curaçao</td>
                                        <td>Sinaai-Waas</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sage Rodriguez</td>
                                        <td>$56,142</td>
                                        <td>Netherlands</td>
                                        <td>Baileux</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Philip Chaney</td>
                                        <td>$38,735</td>
                                        <td>Korea, South</td>
                                        <td>Overland Park</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Doris Greene</td>
                                        <td>$63,542</td>
                                        <td>Malawi</td>
                                        <td>Feldkirchen in Kärnten</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Mason Porter</td>
                                        <td>$78,615</td>
                                        <td>Chile</td>
                                        <td>Gloucester</td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>-->
@endsection