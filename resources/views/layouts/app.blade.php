<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com) & Updivision (https://www.updivision.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim & Updivision

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('light-bootstrap/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('light-bootstrap/img/favicon.ico') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>{{ $title }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">


        <link href="{{ asset('light-bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('light-bootstrap/css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ asset('light-bootstrap/css/demo.css') }}" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
     <script src="{{ asset('light-bootstrap/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>

    <script type="text/javascript">
    $( function() {

   
    $("#datepicker").flatpickr(
      {
    dateFormat: "d/m/Y",
    minDate: "today",
    "locale": {
        "firstDayOfWeek": 1, // start week on Monday
        "locale": "fr" 
    }
}
    );
    $("#daterangepicker").flatpickr(
      {
    dateFormat: "d/m/Y",
    maxDate: "today",
    mode: "range",
    "locale": {
        "firstDayOfWeek": 1, // start week on Monday
        "locale": "fr" 
    }
}
    );



    $("#timepicker").flatpickr(
      {
    enableTime: true,
    dateFormat: "H:i",
    time_24hr: true,
    minDate: "today",
    noCalendar: true,
   
}
    );

    $("#timepicker1").flatpickr(
      {
    enableTime: true,
    dateFormat: "H:i",
    time_24hr: true,
    minDate: "today",
    noCalendar: true,
   
}
    );

    $("#timepicker2").flatpickr(
      {
    enableTime: true,
    dateFormat: "H:i",
    time_24hr: true,
    minDate: "today",
    noCalendar: true,
   
}
    );

    $("#timepicker3").flatpickr(
      {
    enableTime: true,
    dateFormat: "H:i",
    time_24hr: true,
    minDate: "today",
    noCalendar: true,
   
}
    );


$(document).on('change','#daterangepicker', function () {

  var periode = document.getElementById('daterangepicker').value; 
  var matricule = document.getElementById('matricule').value; 
  
  console.log('Periode ' + periode);

  var periode_splitted = periode.split(' ');

  var date_debut = periode_splitted[0];
  var date_fin = periode_splitted[2];


  console.log('Date debut ' + periode_splitted[0]);
  console.log('Date fin ' + periode_splitted[2]);

  var date_debut1 = date_debut.split('/');
  var date_fin1 = date_fin.split('/');

  // TODO Requete vers la bdd pour recuperer toutes les seances effectuees entre ces deux dates 
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  $.ajax({
           type:'POST',
           url:"{{ route('ajaxRequest.post') }}",
           data:{
             date_debut:date_debut,
             date_fin:date_fin,
             matricule:matricule
             },
          //  success:function(data){
          //     alert(data.success);
          //  }
        });



  
});




  } );
</script>      

    
    </head>

    <body>
        <div class="wrapper @if (!auth()->check() || request()->route()->getName() == '') wrapper-full-page @endif">

            @if (auth()->check() && request()->route()->getName() != "")

            @if (auth()->user()->role == 'admin')
                @include('layouts.navbars.sidebar')

            @elseif (auth()->user()->role == 'employe')
                @include('layouts.navbars.sidebar_employe')

            @elseif (auth()->user()->role == 'directeur')
                @include('layouts.navbars.sidebar_directeur')

            @elseif (auth()->user()->role == 'comptable')
                @include('layouts.navbars.sidebar_comptable')

            @elseif (auth()->user()->role == 'informaticien')
                @include('layouts.navbars.sidebar_informaticien')

                @elseif (auth()->user()->role == 'secretaire_comptable')
                @include('layouts.navbars.sidebar_secretaire_comptable')

            @endif

                <!-- @include('pages/sidebarstyle') -->

            @endif

            <div class="@if (auth()->check() && request()->route()->getName() != "") main-panel @endif">
                @include('layouts.navbars.navbar')
                @yield('content')
                <!-- @include('layouts.footer.nav') -->
            </div>

        </div>
       

        
    </body>
       
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    @stack('scripts')

    <script src="{{ asset('light-bootstrap/js/plugins/jquery.sharrre.js') }}"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-switch.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src="{{ asset('light-bootstrap/js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="{{ asset('light-bootstrap/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('light-bootstrap/js/demo.js') }}"></script>
    
    
    @stack('js')
    <script>
      $(document).ready(function () {

        
        $('#facebook').sharrre({
          share: {
            facebook: true
          },
          enableHover: false,
          enableTracking: false,
          enableCounter: false,
          click: function(api, options) {
            api.simulateClick();
            api.openPopup('facebook');
          },
          template: '<i class="fab fa-facebook-f"></i> Facebook',
          url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
        });

        $('#google').sharrre({
          share: {
            googlePlus: true
          },
          enableCounter: false,
          enableHover: false,
          enableTracking: true,
          click: function(api, options) {
            api.simulateClick();
            api.openPopup('googlePlus');
          },
          template: '<i class="fab fa-google-plus"></i> Google',
          url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
        });

        $('#twitter').sharrre({
          share: {
            twitter: true
          },
          enableHover: false,
          enableTracking: false,
          enableCounter: false,
          buttons: {
            twitter: {
              via: 'CreativeTim'
            }
          },
          click: function(api, options) {
            api.simulateClick();
            api.openPopup('twitter');
          },
          template: '<i class="fab fa-twitter"></i> Twitter',
          url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
        });
      });
    </script>
</html>