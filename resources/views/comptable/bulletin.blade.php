<link href="{{ public_path('light-bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Bulletin de salaire </h1><br>

                    <table  class="table table-bordered table-striped" style="width : 50%">
                               
                                        <tr>
                                            <td>Matricule</td>
                                            <td>Nom & Prénom(s)</td>
                                            <td>Categorie</td>
                                            <td>Nombre Séances</td>
                                            <td>Période</td>
                                        </tr>
                                        
                                        @foreach ($datas1 as $data)
                                        <tr>
                                            <td>{{ $data->matricule }}</td>
                                            <td>{{ $data->nom_prenoms }}</td>
                                            <td>{{ $data->categorie }}</td>
                                            <td>{{ $data->nbSeances }}</td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                       
                                       
                                   

                                            <!-- TODO Modifier le bulletin  -->
                                            
                    </table>

                    <table  class="table table-bordered table-striped " style="width : 100%">
                               

                                        <tr>
                                            <td>Date Seance</td>
                                            <td>Debut Seance</td>
                                            <td>Debut Pause</td>
                                            <td>Fin Pause</td>
                                            <td>Fin Seance</td>
                                            <td>Volume Horaire</td>
                                            <td>Montant</td>
                                        </tr>
                                        
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $data->dateSeance }}</td>
                                                <td>{{ $data->debutSeance }}</td>
                                                <td>{{ $data->debutPause }}</td>
                                                <td>{{ $data->finPause }}</td>
                                                <td>{{ $data->finSeance }}</td>
                                                <td>{{ $data->volumeHoraire }}</td>
                                                <td>{{ $data->volumeHoraire * $data->salaire_par_heure }} Fr </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td colspan="6">NET A PAYER</td>
                                            <td>{{ $data->volumeHoraire * $data->salaire_par_heure * $data->nbSeances  }} Fr</td>

                                        </tr>

                                            <!-- TODO Modifier le bulletin  -->
                                            
                    </table>
                </div>
            </div>
        </div>
                    
    </div>   
</div>       