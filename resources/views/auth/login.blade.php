@extends('layouts/app', ['activePage' => 'login', 'title' => 'Gestion des salaires | Connexion'])

@section('content')
    <div class="full-page section-image" data-color="purple" >
        <div class="content pt-5">
            <div class="container mt-5">    
                <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card card-login card-hidden">
                            <div class="card-header ">
                                <h3 class="header text-center">{{ __('Connexion') }}</h3>
                            </div>
                            <div class="card-body ">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="email" class="col-md-6 col-form-label">{{ __('Adresse E-Mail') }}</label>
            
                                        <div class="col-md-14">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-md-6 col-form-label">{{ __('Mot de passe') }}</label>
                
                                            <div class="col-md-14">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox" name="remember"  id="remember">
                                                    <span class="form-check-sign"></span>
                                                    {{ __('Se rappeler de moi') }}
                                                </label>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <div class="container text-center" >
                                        <button type="submit" class="btn btn-warning btn-wd">{{ __('Connexion') }}</button>
                                    </div>
                                    <br>
                                    <div class=" text-center">
                                        <a class="btn btn-link"  style="color:#Ofacd5" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié ?') }}
                                        </a>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
@endpush