<link href="{{ public_path('light-bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Bulletin de salaire </h1><br>

                    <table  class="table table-bordered table-striped" style="width : 50%">
                    <tr>
                        <td>Informations sur la société </td>
                        <td>CACHET </td>
                        <td ><b>Bullletin de salaire <br> Mois : Mars 2022 </b></td>
                        
                        <td colspan="2"> Matricule : 1516<br> Nom et prénom(s) : DJIRABOU LEONARD <br> N° CNPS : 17506</td>
                     
                    </tr>
                    <tr>
                        <td> PROFESSION </td>
                        <td> DEPARTEMENT </td>
                        <td> CATEGORIE </td>
                        <td> DATE D'EMBAUCHE </td>
                        <td>DATE D'ENTREE</td>
                    </tr>
                    <tr>
                        <td>  </td>
                        <td> LOGISTIQUE </td>
                        <td> SERVICE ACHATS </td>
                        <td>16/08/2020 </td>
                        <td>16/08/2020</td>
                    </tr>
                  
                                       

                                            <!-- TODO Modifier le bulletin  -->
                                            
                    </table> <br>

                    <table  class="table table-bordered table-striped " style="width : 100%">
                               
                  
                                        <tr>
                                            <td>N°</td>
                                            <td>Rubriques</td>
                                            <td>Nombre</td>
                                            <td>Base</td>
                                            <td>Taux</td>
                                            <td>Gains</td>
                                            <td>Retenues</td>
                                        </tr>

                                       

                                        <tr>
                                            <td>10</td>
                                            <td>Salaire de base</td>
                                            <td>30</td>
                                            <td>300 000</td>
                                            <td></td>
                                            <td>300 000</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Sursalaire</td>
                                            <td>30</td>
                                            <td>1 200 000</td>
                                            <td></td>
                                            <td>1 200 000</td>
                                            <td></td>
                                        </tr>
                                        

                                      
                                        <tr>
                                            <td></td>
                                            <td>Total imposable</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>1 500 000</td>
                                            <td></td>
                                        </tr>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $data->dateSeance }}</td>
                                                <td>{{ $data->debutSeance }}</td>
                                                <td>{{ $data->debutPause }}</td>
                                                <td>{{ $data->finPause }}</td>
                                                <td>{{ $data->finSeance }}</td>
                                                <td>{{ $data->volumeHoraire }}</td>
                                                <td>{{ $data->volumeHoraire * $data->sursalaire }} Fr </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td colspan="6">NET A PAYER</td>
                                            <td>{{ $data->volumeHoraire * $data->sursalaire * $data->nbSeances  }} Fr</td>

                                        </tr>

                                            <!-- TODO Modifier le bulletin  -->
                                            
                    </table>
                </div>
            </div>
        </div>
                    
    </div>   
</div>       