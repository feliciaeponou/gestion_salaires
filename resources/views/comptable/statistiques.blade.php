@extends('layouts.app', ['activePage' => 'statistiques', 'title' => 'Gestion Des Salaires | Statistiques', 'navName' => 'Statistiques', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card strpied-tabled-with-hover">
                        
                        <div class="card-body  table-responsive">
                            <div class="row">
                                <div class="col-md-3" > <h1 >18</h1></div>
                                <div class="col-md-9"> <h3>Employés remplissent les conditions de paiement</h3></div>
                            </div>
                       
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card strpied-tabled-with-hover">
                       
                        <div class="card-body  table-responsive">
                        <div class="row">
                                <div class="col-md-3" > <h1 >28</h1></div>
                                <div class="col-md-9"> <h3>Employés ne remplissent pas les conditions de paiement</h3></div>
                            </div>
                       


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card strpied-tabled-with-hover">
                       
                        <div class="card-body  table-responsive">
                            <div class="row">
                                <div class="col-md-3" > <h1 >19</h1></div>
                                <div class="col-md-9"> <h3>Paiements en cours</h3></div>
                            </div>


                        </div>
                    </div>
                </div>
                     
            </div>
                     
        </div>   
    </div>      
                     
@endsection