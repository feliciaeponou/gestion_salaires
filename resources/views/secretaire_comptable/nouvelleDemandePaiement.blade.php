@extends('layouts.app', ['activePage' => 'nouveauPointage', 'title' => 'Gestion Des Salaires | Nouveau pointage', 'navName' => 'Nouveau pointage', 'activeButton' => 'laravel'])

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



                                    @if(isset($details))

                                    @php $volumeHoraireTotal = 0;
                                    $nbSeances = count($details);

                                    foreach($details as $pointages)
                                    foreach($employes as $employe)

                                    
                                        $volumeHoraireTotal = $volumeHoraireTotal + $pointages->volumeHoraire;

                                        

                                        $salaireTotal = $employe->salaire_par_heure * $volumeHoraireTotal;

                                        @endphp
                                        


                                    <form method="post" action="{{ route('enregistrerDemandePaiement') }}" autocomplete="off"
                enctype="multipart/form-data">
                @csrf
                @method('patch')

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            {{ __('Nom et prénoms') }}
                        </label>
                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                        <input type="text" class="form-control " name="nom_prenoms" value="{{$employe -> nom_prenoms}}" readonly> 
                    </div>

                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            {{ __('Matricule') }}
                        </label>
                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                        <input type="text" class="form-control " name="matricule" id="matricule" value="{{$employe -> matricule}}" readonly> 
                    </div>
                   

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name" >
                            {{ __('Période') }}
                        </label>
                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                        <input type="text" class="form-control" readonly name="periode" value="{{ $periodes }}"> 
                    </div>


                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Nombre de séances') }}
                                        </label>
                                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                                        <input type="text" class="form-control " readonly name="nbSeances" value=" {{ $nbSeances }}"> 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Volume Horaire Total') }}
                                        </label>
                                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                                        <input type="text" class="form-control" readonly name="volumeHoraireTotal" value=" {{ $volumeHoraireTotal }}"> 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Coût Total') }}
                                        </label>
                                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                                        <input type="text" class="form-control" readonly name="coutTotal" value=" {{ $salaireTotal  }}" > 
                                    </div>   

                                   <input type="hidden" name="employe_id" value="{{$employe -> id}}">
                                    
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-default mt-4">{{ __('Enregistrer') }}</button>
                                    </div>
                                </div>
                            </form>

            <!-- endforeach -->


            @elseif  (isset($message)) 
            @foreach ($employes as $employe)

            <form method="post" action="{{ route('verifierSeances') }}" autocomplete="off"
                enctype="multipart/form-data">
                @csrf
                @method('patch')

                
                @include('alerts.errors')
                @include('alerts.error_self_update', ['key' => 'not_allow_profile'])

                <div class="pl-lg-4">

                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            {{ __('Nom et prénoms') }}
                        </label>
                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                        <input type="text" class="form-control " name="nom_prenoms" value="{{$employe -> nom_prenoms}}" readonly> 
                    </div>

                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            {{ __('Matricule') }}
                        </label>
                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                        <input type="text" class="form-control " name="matricule" id="matricule" value="{{$employe -> matricule}}" readonly> 
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name" >
                            {{ __('Période') }}
                        </label>
                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                        <input type="text" class="form-control" id="daterangepicker" name="periode" > 
                    </div>
                    <input type="hidden" name="salaire_par_heure" value="{{$employe -> salaire_par_heure}}">
                    <div class="text-center">
                        <button type="submit" name="verifier" class="btn btn-default mt-4">{{ __('Vérifier') }}</button>
                    </div>

                    </form>

                    @endforeach






            @else


            @foreach ($employes as $employe)
        
        <form method="post" action="{{ route('verifierSeances') }}" autocomplete="off"
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
                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                        <input type="text" class="form-control " name="nom_prenoms" value="{{$employe -> nom_prenoms}}" readonly> 
                    </div>

                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            {{ __('Matricule') }}
                        </label>
                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                        <input type="text" class="form-control " name="matricule" id="matricule" value="{{$employe -> matricule}}" readonly> 
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name" >
                            {{ __('Période') }}
                        </label>
                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                        <input type="text" class="form-control" id="daterangepicker" name="periode" > 
                    </div>
                    <input type="hidden" name="salaire_par_heure" value="{{$employe -> salaire_par_heure}}">
                    <div class="text-center">
                        <button type="submit" class="btn btn-default mt-4">{{ __('Vérifier') }}</button>
                    </div>

                    </form>

                    @endforeach



            
            @endif


            

                        </div></div>
                        
            </div>
        </div>
    </div>
@endsection








