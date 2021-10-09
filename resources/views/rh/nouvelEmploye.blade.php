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

                        <form method="post" action="{{ route('enregistrerEmploye') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                
                                @include('alerts.success')
                                @include('alerts.error_self_update', ['key' => 'not_allow_profile'])
        
                                <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Nom et prénoms') }}
                                        </label>
                                        <input type="text" class="form-control " name="nom_prenoms"  > 
                                    </div>

                              

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Date de naissance') }}
                                        </label>
                                        <input type="text" class="form-control" id="datepickernais" name="date_naissance" > 
                                        
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}" >
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Genre') }}
                                        </label> <br>
                                       

                                        <div class="form-check form-check-inline"  style="margin-left : 20px">
                                        <input class="form-check-input" type="radio" name="genre" id="inlineRadio1" value="homme" checked> <label  for="inlineRadio1">HOMME</label><br>
                                        <input class="form-check-input" type="radio" name="genre" id="inlineRadio2" value="femme"> <label  for="inlineRadio1">FEMME</label>
                                           
                                            <!-- <label class="form-check-label" for="inlineRadio1">HOMME</label> -->
                                        </div> 
                                        <!-- <div class="form-check  form-check-inline"  style="margin-left : 20px">
                                           
                                            <label class="form-check-label" for="inlineRadio2">FEMME </label>
                                        </div> -->
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Catégorie de l\'employé') }}
                                        </label>
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
                                        
                                        <select name="salaire_par_heure" id="" class="form-control">
                                            <option value="">--</option>
                                            <option value="5000">5000</option>
                                            <option value="8000">8000</option>
                                            <option value="15000">15000</option>
                                        </select>
                                    </div>


                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Volume horaire') }}
                                        </label>
                                        <input type="number" class="form-control" name="volume_horaire" > 
                                        
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Email') }}
                                        </label>
                                        <input type="email" class="form-control" name="email" > 
                                        
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Mot de passe') }}
                                        </label>
                                        <input type="text" class="form-control" name="password" > 
                                        
                                    </div>
                                    
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