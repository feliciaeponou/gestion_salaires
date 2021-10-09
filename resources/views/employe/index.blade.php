@extends('layouts.app', ['activePage' => 'employe_dashboard', 'title' => 'Gestion Des Salaires | Séances employé', 'navName' => 'Mes séances', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <!-- <h4 class="card-title">{{ __('Interface seance') }}</h4> -->
                            <!-- <p class="card-category">{{ __('Last Campaign Performance') }}</p> -->
                        </div>
                        <div class="card-body ">
                        @if(isset($seances))


                        <table class="table table-hover table-striped">
                                <thead>
                                    <th>Debut de la séance</th>
                                    <th>Debut de la pause</th>
                                    <th>Fin de la pause</th>
                                    <th>Fin de la seance</th>
                                    <th>Volume horaire</th>
                                    <th>Payée</th>
                                </thead>
                                
                                <tbody>
                                @foreach ($seances as $seance)
        
                                    <tr>
                                        <td>{{ $seance->debutSeance }}</td>
                                        <td>{{ $seance->debutPause }}</td>
                                        <td>{{ $seance->finPause }}</td>
                                        <td>{{ $seance->finSeance }}</td>
                                        <td>{{ $seance->volumeHoraire }}</td>
                                        <td>@if ($seance->payee=="non") Non @elseif  ($seance->payee == "oui") Oui @endif</td>
                                        
                                    </tr>
                                    @endforeach

                                    @endif

                                    
</tbody>
</table>
                        </div>
                        <div class="card-footer ">
                            <!-- <hr>
                            <div class="stats">
                                <i class="now-ui-icons loader_refresh spin"></i> {{ __('Updated 3 minutes ago') }}
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            // demo.initDashboardPageCharts();

            // demo.showNotification();

        });
    </script>
@endpush