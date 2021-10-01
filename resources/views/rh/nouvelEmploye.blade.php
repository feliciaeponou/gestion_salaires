@extends('layouts.app', ['activePage' => 'nouvelEmploye', 'title' => 'Gestion Des Salaires | Nouvel employe', 'navName' => 'Nouvel Employé', 'activeButton' => 'laravel'])

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

                        <form method="post" action="{{ route('enregistrerPointage') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <!-- <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6> -->
                                
                                @include('alerts.success')
                                @include('alerts.error_self_update', ['key' => 'not_allow_profile'])
        
                                <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Nom et prénoms') }}
                                        </label>
                                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                                        <input type="text" class="form-control " name="nom_prenoms"  > 
                                    </div>

                                <!-- <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Matricule') }}
                                        </label>
                                         <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> 
                                        <input type="text" class="form-control " name="matricule" readonly> 
                                    </div> -->

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Date de naissance') }}
                                        </label>
                                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                                        <input type="text" class="form-control" id="datepickernais" name="dateSeance" > 
                                        
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Genre') }}
                                        </label> <br>

                                        <div class="form-check  form-check-inline">
                                            <input class="form-check-input" type="radio" name="genre" id="inlineRadio1" value="homme" checked>
                                            <label class="form-check-label" for="inlineRadio1">HOMME</label>
                                            </div>
                                            <div class="form-check  form-check-inline">
                                            <input class="form-check-input" type="radio" name="genre" id="inlineRadio2" value="femme">
                                            <label class="form-check-label" for="inlineRadio2">
                                                FEMME
                                            </label>
                                            </div>
                                    </div>

                                    


                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Catégorie de l\'employé') }}
                                        </label>
                                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                                        <input type="text" class="form-control " name="categorie"> 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Service de l\'employé') }}
                                        </label>
                                        <input type="text" class="form-control" name="service"> 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Date de debut de fonctions') }}
                                        </label>
                                        <input type="text" class="form-control" id="date_debut_service" name="date_debut_service" > 
                                        
                                    </div>


                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Salaire par heure') }}
                                        </label>
                                        <input type="text" class="form-control" id="" name="finPause"> 
                                        <input id="employeeSalary" name="employeeSalary" list="salaryList" type="text" class="form-control" placeholder="Salaire de l'employé (par heures)">
                                <datalist id="salaryList">
                                        <option value="5000">
                                        <option value="8000">
                                        <option value="15000">
                                </datalist>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Fin de la Seance') }}
                                        </label>
                                        <input type="text" class="form-control " id="timepicker3" name="finSeance"> 
                                    </div>

                                   <input type="hidden" name="employe_id">
                                    
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-default mt-4">{{ __('Enregistrer') }}</button>
                                    </div>
                                </div>
                            </form>




                        </div>
                    </div>
                        
            </div>
        </div>
    </div>

@endsection