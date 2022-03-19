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

                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                        <form method="post" action="{{ route('enregistrerEmploye') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                
                                @method('patch')
                                
                                @include('sweetalert::alert')
                                @include('alerts.error_self_update', ['key' => 'not_allow_profile'])
        
                                <div class="pl-lg-4">

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Nom et prénoms') }}
                                        </label>
                                        <input type="text" class="form-control" name="nom_prenoms"  > 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Date de naissance') }}
                                        </label>
                                        <input type="text" class="form-control datepicker" id="datepickernais" name="date_naissance" > 
                                        
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Genre') }}
                                        </label>
                                        
                                        <select name="genre" id="" class="form-control">
                                            <option value="">--</option>
                                            <option value="Homme">Homme</option>
                                            <option value="Femme">Femme</option>
                                        </select>
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
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Intitulé du poste ') }}
                                        </label>
                                        <input type="text" class="form-control" name="intitule_poste"> 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Date d\'entrée ') }}
                                        </label>
                                        <input type="text" class="form-control datepicker" id="date_entree" name="date_entree" > 
                                        
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Date d\'embauche ') }}
                                        </label>
                                        <input type="text" class="form-control datepicker" id="date_embauche" name="date_embauche" > 
                                        
                                    </div>


                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Salaire de base par mois') }}
                                        </label>
                                        
                                        <input type="number" class="form-control" name="salaire_base"> 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Sursalaire par heure') }}
                                        </label>
                                        
                                        <input type="number" class="form-control" name="sursalaire">
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Prime de transport') }}
                                        </label>
                                        
                                        <input type="number" class="form-control" name="prime_transport">
                                    </div>


                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Numéro CNPS') }}
                                        </label>
                                        <input type="number" class="form-control" name="numero_cnps" > 
                                        
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
                                        <input type="submit" value="{{ __('Enregistrer') }}" class="btn btn-warning mt-4 btn-lg " />
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                        
            </div>
        </div>
    </div>

@endsection