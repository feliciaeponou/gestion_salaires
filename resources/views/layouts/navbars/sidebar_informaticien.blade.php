<div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebar-5.jpg') }}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                {{ __("Interface informaticien") }}
            </a>
        </div>
        <ul class="nav">
            <!-- <li class="nav-item @if($activePage == 'pointage') active @endif">
                <a class="nav-link" href="/">
                    <i class="nc-icon nc-single-02"></i>
                    <p>{{ __("Nouvelle séance") }}</p>
                </a>
            </li> -->
            <li class="nav-item @if($activePage == 'listeEmployes') active @endif">
                <a class="nav-link" href="/">
                    <i class="nc-icon nc-single-02"></i>
                    <p>{{ __("Employés") }}</p>
                </a>
            </li>
            <!-- <li class="nav-item @if($activePage == 'services') active @endif">
                <a class="nav-link" href="/">
                    <i class="nc-icon nc-time-alarm"></i>
                    <p>{{ __("Services") }}</p>
                </a>
            </li> -->
            <!-- <li class="nav-item @if($activePage == 'paiements') active @endif">
                <a class="nav-link" href="/">
                    <i class="nc-icon nc-money-coins"></i>
                    <p>{{ __("Catégories d'employés") }}</p>
                </a>
            </li> -->
            <!-- <li class="nav-item @if($activePage == 'user') active @endif">
                            <a class="nav-link" href="{{route('profile.edit')}}">
                                <i class="nc-icon nc-single-02"></i>
                                <p>{{ __("Mon profil") }}</p>
                            </a>
                        </li> -->
           
            <!-- <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laravelExamples" @if($activeButton =='laravel') aria-expanded="true" @endif>
                    <i>
                        <img src="{{ asset('light-bootstrap/img/laravel.svg') }}" style="width:25px">
                    </i>
                    <p>
                        {{ __('Laravel example') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse @if($activeButton =='laravel') show @endif" id="laravelExamples">
                    <ul class="nav">
                        <li class="nav-item @if($activePage == 'user') active @endif">
                            <a class="nav-link" href="{{route('profile.edit')}}">
                                <i class="nc-icon nc-single-02"></i>
                                <p>{{ __("User Profile") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{route('user.index')}}">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>{{ __("User Management") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item @if($activePage == 'table') active @endif">
                <a class="nav-link" href="{{route('page.index', 'table')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>{{ __("Table List") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="{{route('page.index', 'typography')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>{{ __("Typography") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'icons') active @endif">
                <a class="nav-link" href="{{route('page.index', 'icons')}}">
                    <i class="nc-icon nc-atom"></i>
                    <p>{{ __("Icons") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'maps') active @endif">
                <a class="nav-link" href="{{route('page.index', 'maps')}}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __("Maps") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'notifications') active @endif">
                <a class="nav-link" href="{{route('page.index', 'notifications')}}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __("Notifications") }}</p>
                </a>
            </li> -->
            
        </ul>
    </div>
</div>
