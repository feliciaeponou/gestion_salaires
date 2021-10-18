@extends('layouts.app', ['activePage' => 'detailsemploye', 'title' => 'Gestion Des Salaires | Détails infos utilisateur', 'navName' => 'Détails infos utilisateur', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <!-- <div class="card-header ">

                        <a href="{{ url()->previous() }}" class="btn btn-default">
                            <span class="nc-icon nc-stre-left"></i></span></a>

                            <ul class="navbar-nav  d-flex align-items-center" > 
                               

                            <li class="nav-item">
                                <form href="" class="btn btn-default">
                                <span class="fas fa-ban"></i></span></form>
                            </li>

                            <li class="nav-item">
                                <a href="" class="btn btn-default">
                                <span class="fas fa-ban"></i></span></a>
                            </li>

                            </ul>
                        </div> -->
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
                    
                <a href="{{ url()->previous() }}" class="btn btn-default">
                            <span class="nc-icon nc-stre-left"></i></span></a>
                </li>

            </ul>
            <ul class="navbar-nav   d-flex align-items-center"> 
                
            <!-- <form action="{{ route('searchEmployeRH') }}" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="d-flex form-control" name="q" style="width: 300px; height : 49px;  margin-top : 15px"
                        placeholder="Rechercher des employés"> <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="nc-icon nc-zoom-split"></i></span>
</button>
                    </span>
                </div>
            </form> -->
                
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
                @foreach ($employes as $employe)
                @if ($employe->suspendu == "non")
                <li class="nav-item">
                                <a href="{{ route('suspendreEmploye', $employe->matricule) }}" class="btn btn-default">
                                <span style="color : blue" class="far fa-pause-circle fa-2x"></i></span></a>
                            </li>
                            @else 
                            <li class="nav-item">
                                <a href="{{ route('retablirEmploye', $employe->matricule) }}" class="btn btn-default">
                                <span style="color : green" class="far fa-play-circle fa-2x"></i></span></a>
                            </li>
                            @endif

                            <li class="nav-item">
                                <a href="{{ route('suppressionEmploye', $employe->matricule) }}" class="btn btn-default">
                                <span style="color : red" class="fas fa-trash fa-2x"></i></span></a>
                            </li>
              
            </ul>
        </div>
    </div>
</nav>




                            <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                        </div>

                        <div class="card-body">


                        
        
                        <form method="post" action="{{ route('editInfosEmploye') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <!-- <h6 class="heading-small text-muted mb-4">{{ __('employe information') }}</h6> -->
                                
                                <!-- @include('sweetalert::alert')
                                @include('alerts.error_self_update', ['key' => 'not_allow_profile'])
                             -->

                             @include('sweetalert::alert')

        
                                <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Matricule') }}
                                        </label>
                                        <input type="text" class="form-control " name="matricule" value="{{$employe -> matricule}}" readonly> 
                                    </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Nom et prénoms') }}
                                        </label>
                                        <input type="text" class="form-control " name="nom_prenoms" value="{{$employe -> nom_prenoms}}" > 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Email') }}
                                        </label>
                                        <input type="email" class="form-control " name="email" value="{{$employe -> email}}" > 
                                        
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Date de naissance') }}
                                        </label>
                                        <input type="text" class="form-control " name="date_naissance" value="{{$employe -> date_naissance}}" > 
                                        
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Salaire par heure') }}
                                        </label>
                                        <input type="text" class="form-control " name="salaire_par_heure" value="{{$employe -> salaire_par_heure}}" > 
                                        
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Date de debut de service') }}
                                        </label>
                                        <input type="text" class="form-control " name="date_debut_service" value="{{$employe -> date_debut_service}}" > 
                                        
                                    </div>

                                   

                                    <!-- <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Debut de la Pause') }}
                                        </label>
                                        <input type="text" class="form-control" id="timepicker1" name="debutPause"> 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Fin de la Pause') }}
                                        </label>
                                        <input type="text" class="form-control" id="timepicker2" name="finPause"> 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Fin de la Seance') }}
                                        </label>
                                        <input type="text" class="form-control " id="timepicker3" name="finSeance"> 
                                    </div>

                                   <input type="hidden" name="employe_id" value="{{$employe -> id}}">
                                     -->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-default mt-4">{{ __('Modifier') }}</button>
                                    </div>
                                </div>
                            </form>

            @endforeach

                        </div></div>
                        
            </div>
        </div>
    </div>
@endsection








