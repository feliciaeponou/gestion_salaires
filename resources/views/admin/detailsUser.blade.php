@extends('layouts.app', ['activePage' => 'detailsUser', 'title' => 'Gestion Des Salaires | Détails infos utilisateur', 'navName' => 'Détails infos utilisateur', 'activeButton' => 'laravel'])

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


                        @foreach ($users as $user)
        
                        <form method="post" action="{{ route('editInfosUser') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <!-- <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6> -->
                                
                                @include('sweetalert::alert')
                                @include('alerts.error_self_update', ['key' => 'not_allow_profile'])
        
                                <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Matricule') }}
                                        </label>
                                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                                        <input type="text" class="form-control " name="matricule" value="{{$user -> matricule}}" readonly> 
                                    </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Nom et prénoms') }}
                                        </label>
                                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                                        <input type="text" class="form-control " name="name" value="{{$user -> name}}" > 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name" >
                                            {{ __('Email') }}
                                        </label>
                                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                                        <input type="email" class="form-control " name="email" value="{{$user -> email}}" > 
                                        
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Rôle') }}
                                        </label>
                                        <!-- <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus> -->
                                        <input type="text" style="text-transform : uppercase" class="form-control " name="role" value="{{$user -> role}}"> 
                                    </div>

                                    <!-- <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Debut de la Pause') }}
                                        </label>
                                         <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>
                                        <input type="text" class="form-control" id="timepicker1" name="debutPause"> 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Fin de la Pause') }}
                                        </label>
                                         <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>
                                        <input type="text" class="form-control" id="timepicker2" name="finPause"> 
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            {{ __('Fin de la Seance') }}
                                        </label>
                                         <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>
                                        <input type="text" class="form-control " id="timepicker3" name="finSeance"> 
                                    </div>

                                   <input type="hidden" name="user_id" value="{{$user -> id}}">
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








