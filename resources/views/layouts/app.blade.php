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
        <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" /> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /> -->
        <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
        <!-- <link rel="stylesheet" href="{{asset('css/solid.min.css')}}"> -->
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <!-- CSS Files -->
        <link href="{{ asset('light-bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('light-bootstrap/css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <!-- <link href="{{ asset('light-bootstrap/css/demo.css') }}" rel="stylesheet" /> -->

      <link rel="stylesheet" href="{{ asset('css/flatpicker.min.css') }}"/>
      <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}"/>


    <script src="{{ asset('light-bootstrap/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('light-bootstrap/js/core/moment.min.js') }}"></script>
     <script src="{{ asset('light-bootstrap/js/core/popper.min.js') }}" type="text/javascript"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> -->
    <script src="{{ asset('light-bootstrap/js/core/bootstrap.min.js') }}"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="{{ asset('js/flatpicker.min.js') }}"></script>
    <script src="{{ asset('js/fr.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json"></script>
    <link rel="stylesheet" href="{{asset('js/fontawesome.min.js')}}">
        <!-- <link rel="stylesheet" href="{{asset('js/solid.min.js')}}"> -->
        <link rel="stylesheet" href="{{asset('js/all.min.js')}}">

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

    $("#datepickernais").flatpickr(
      {
    dateFormat: "d/m/Y",
    "locale": {
        "firstDayOfWeek": 1, // start week on Monday
        "locale": "fr" 
    }
}
    );
    $("#date_debut_service").flatpickr(
      {
    dateFormat: "d/m/Y",
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



  
});


$('#example').DataTable(
    {
        language: {
            "emptyTable": "Aucune donnée disponible dans le tableau",
    "loadingRecords": "Chargement...",
    "processing": "Traitement...",
    "aria": {
        "sortAscending": ": activer pour trier la colonne par ordre croissant",
        "sortDescending": ": activer pour trier la colonne par ordre décroissant"
    },
    "select": {
        "rows": {
            "_": "%d lignes sélectionnées",
            "1": "1 ligne sélectionnée"
        },
        "cells": {
            "1": "1 cellule sélectionnée",
            "_": "%d cellules sélectionnées"
        },
        "columns": {
            "1": "1 colonne sélectionnée",
            "_": "%d colonnes sélectionnées"
        }
    },
    "autoFill": {
        "cancel": "Annuler",
        "fill": "Remplir toutes les cellules avec <i>%d<\/i>",
        "fillHorizontal": "Remplir les cellules horizontalement",
        "fillVertical": "Remplir les cellules verticalement"
    },
    "searchBuilder": {
        "conditions": {
            "date": {
                "after": "Après le",
                "before": "Avant le",
                "between": "Entre",
                "empty": "Vide",
                "not": "Différent de",
                "notBetween": "Pas entre",
                "notEmpty": "Non vide",
                "equals": "Égal à"
            },
            "number": {
                "between": "Entre",
                "empty": "Vide",
                "gt": "Supérieur à",
                "gte": "Supérieur ou égal à",
                "lt": "Inférieur à",
                "lte": "Inférieur ou égal à",
                "not": "Différent de",
                "notBetween": "Pas entre",
                "notEmpty": "Non vide",
                "equals": "Égal à"
            },
            "string": {
                "contains": "Contient",
                "empty": "Vide",
                "endsWith": "Se termine par",
                "not": "Différent de",
                "notEmpty": "Non vide",
                "startsWith": "Commence par",
                "equals": "Égal à",
                "notContains": "Ne contient pas",
                "notEnds": "Ne termine pas par",
                "notStarts": "Ne commence pas par"
            },
            "array": {
                "empty": "Vide",
                "contains": "Contient",
                "not": "Différent de",
                "notEmpty": "Non vide",
                "without": "Sans",
                "equals": "Égal à"
            }
        },
        "add": "Ajouter une condition",
        "button": {
            "0": "Recherche avancée",
            "_": "Recherche avancée (%d)"
        },
        "clearAll": "Effacer tout",
        "condition": "Condition",
        "data": "Donnée",
        "deleteTitle": "Supprimer la règle de filtrage",
        "logicAnd": "Et",
        "logicOr": "Ou",
        "title": {
            "0": "Recherche avancée",
            "_": "Recherche avancée (%d)"
        },
        "value": "Valeur"
    },
    "searchPanes": {
        "clearMessage": "Effacer tout",
        "count": "{total}",
        "title": "Filtres actifs - %d",
        "collapse": {
            "0": "Volet de recherche",
            "_": "Volet de recherche (%d)"
        },
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Pas de volet de recherche",
        "loadMessage": "Chargement du volet de recherche...",
        "collapseMessage": "Réduire tout",
        "showMessage": "Montrer tout"
    },
    "buttons": {
        "collection": "Collection",
        "colvis": "Visibilité colonnes",
        "colvisRestore": "Rétablir visibilité",
        "copy": "Copier",
        "copySuccess": {
            "1": "1 ligne copiée dans le presse-papier",
            "_": "%ds lignes copiées dans le presse-papier"
        },
        "copyTitle": "Copier dans le presse-papier",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Afficher toutes les lignes",
            "_": "Afficher %d lignes"
        },
        "pdf": "PDF",
        "print": "Imprimer",
        "copyKeys": "Appuyez sur ctrl ou u2318 + C pour copier les données du tableau dans votre presse-papier."
    },
    "decimal": ",",
    "search": "Rechercher:",
    "thousands": ".",
    "datetime": {
        "previous": "Précédent",
        "next": "Suivant",
        "hours": "Heures",
        "minutes": "Minutes",
        "seconds": "Secondes",
        "unknown": "-",
        "amPm": [
            "am",
            "pm"
        ],
        "months": {
            "0": "Janvier",
            "2": "Mars",
            "3": "Avril",
            "4": "Mai",
            "5": "Juin",
            "6": "Juillet",
            "8": "Septembre",
            "9": "Octobre",
            "10": "Novembre",
            "1": "Février",
            "11": "Décembre",
            "7": "Août"
        },
        "weekdays": [
            "Dim",
            "Lun",
            "Mar",
            "Mer",
            "Jeu",
            "Ven",
            "Sam"
        ]
    },
    "editor": {
        "close": "Fermer",
        "create": {
            "title": "Créer une nouvelle entrée",
            "button": "Nouveau",
            "submit": "Créer"
        },
        "edit": {
            "button": "Editer",
            "title": "Editer Entrée",
            "submit": "Mettre à jour"
        },
        "remove": {
            "button": "Supprimer",
            "title": "Supprimer",
            "submit": "Supprimer",
            "confirm": {
                "_": "Êtes-vous sûr de vouloir supprimer %d lignes ?",
                "1": "Êtes-vous sûr de vouloir supprimer 1 ligne ?"
            }
        },
        "error": {
            "system": "Une erreur système s'est produite"
        },
        "multi": {
            "noMulti": "Ce champ peut être édité individuellement, mais ne fait pas partie d'un groupe. ",
            "title": "Valeurs multiples",
            "restore": "Rétablir modification",
            "info": "Les éléments sélectionnés contiennent différentes valeurs pour cette entrée. Pour modifier et définir tous les éléments de cette entrée à la même valeur, cliquez ou tapez ici, sinon ils conserveront leurs valeurs individuelles."
        }
    },
    "stateRestore": {
        "removeSubmit": "Supprimer",
        "creationModal": {
            "button": "Créer",
            "name": "Nom :",
            "order": "Tri",
            "paging": "Pagination",
            "scroller": "Position du défilement",
            "search": "Recherche",
            "select": "Sélection",
            "toggleLabel": "Inclus :"
        },
        "renameButton": "Renommer"
    },
    "info": "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
    "infoEmpty": "Affichage de 0 à 0 sur 0 entrées",
    "infoFiltered": "(filtrées depuis un total de _MAX_ entrées)",
    "lengthMenu": "Afficher _MENU_ entrées",
    "paginate": {
        "first": "Première",
        "last": "Dernière",
        "next": "Suivante",
        "previous": "Précédente"
    },
    "zeroRecords": "Aucune entrée correspondante trouvée"
        }
    } 
);

$('#example1').DataTable(
    {
        language: {
            "emptyTable": "Aucune donnée disponible dans le tableau",
    "loadingRecords": "Chargement...",
    "processing": "Traitement...",
    "aria": {
        "sortAscending": ": activer pour trier la colonne par ordre croissant",
        "sortDescending": ": activer pour trier la colonne par ordre décroissant"
    },
    "select": {
        "rows": {
            "_": "%d lignes sélectionnées",
            "1": "1 ligne sélectionnée"
        },
        "cells": {
            "1": "1 cellule sélectionnée",
            "_": "%d cellules sélectionnées"
        },
        "columns": {
            "1": "1 colonne sélectionnée",
            "_": "%d colonnes sélectionnées"
        }
    },
    "autoFill": {
        "cancel": "Annuler",
        "fill": "Remplir toutes les cellules avec <i>%d<\/i>",
        "fillHorizontal": "Remplir les cellules horizontalement",
        "fillVertical": "Remplir les cellules verticalement"
    },
    "searchBuilder": {
        "conditions": {
            "date": {
                "after": "Après le",
                "before": "Avant le",
                "between": "Entre",
                "empty": "Vide",
                "not": "Différent de",
                "notBetween": "Pas entre",
                "notEmpty": "Non vide",
                "equals": "Égal à"
            },
            "number": {
                "between": "Entre",
                "empty": "Vide",
                "gt": "Supérieur à",
                "gte": "Supérieur ou égal à",
                "lt": "Inférieur à",
                "lte": "Inférieur ou égal à",
                "not": "Différent de",
                "notBetween": "Pas entre",
                "notEmpty": "Non vide",
                "equals": "Égal à"
            },
            "string": {
                "contains": "Contient",
                "empty": "Vide",
                "endsWith": "Se termine par",
                "not": "Différent de",
                "notEmpty": "Non vide",
                "startsWith": "Commence par",
                "equals": "Égal à",
                "notContains": "Ne contient pas",
                "notEnds": "Ne termine pas par",
                "notStarts": "Ne commence pas par"
            },
            "array": {
                "empty": "Vide",
                "contains": "Contient",
                "not": "Différent de",
                "notEmpty": "Non vide",
                "without": "Sans",
                "equals": "Égal à"
            }
        },
        "add": "Ajouter une condition",
        "button": {
            "0": "Recherche avancée",
            "_": "Recherche avancée (%d)"
        },
        "clearAll": "Effacer tout",
        "condition": "Condition",
        "data": "Donnée",
        "deleteTitle": "Supprimer la règle de filtrage",
        "logicAnd": "Et",
        "logicOr": "Ou",
        "title": {
            "0": "Recherche avancée",
            "_": "Recherche avancée (%d)"
        },
        "value": "Valeur"
    },
    "searchPanes": {
        "clearMessage": "Effacer tout",
        "count": "{total}",
        "title": "Filtres actifs - %d",
        "collapse": {
            "0": "Volet de recherche",
            "_": "Volet de recherche (%d)"
        },
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Pas de volet de recherche",
        "loadMessage": "Chargement du volet de recherche...",
        "collapseMessage": "Réduire tout",
        "showMessage": "Montrer tout"
    },
    "buttons": {
        "collection": "Collection",
        "colvis": "Visibilité colonnes",
        "colvisRestore": "Rétablir visibilité",
        "copy": "Copier",
        "copySuccess": {
            "1": "1 ligne copiée dans le presse-papier",
            "_": "%ds lignes copiées dans le presse-papier"
        },
        "copyTitle": "Copier dans le presse-papier",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Afficher toutes les lignes",
            "_": "Afficher %d lignes"
        },
        "pdf": "PDF",
        "print": "Imprimer",
        "copyKeys": "Appuyez sur ctrl ou u2318 + C pour copier les données du tableau dans votre presse-papier."
    },
    "decimal": ",",
    "search": "Rechercher:",
    "thousands": ".",
    "datetime": {
        "previous": "Précédent",
        "next": "Suivant",
        "hours": "Heures",
        "minutes": "Minutes",
        "seconds": "Secondes",
        "unknown": "-",
        "amPm": [
            "am",
            "pm"
        ],
        "months": {
            "0": "Janvier",
            "2": "Mars",
            "3": "Avril",
            "4": "Mai",
            "5": "Juin",
            "6": "Juillet",
            "8": "Septembre",
            "9": "Octobre",
            "10": "Novembre",
            "1": "Février",
            "11": "Décembre",
            "7": "Août"
        },
        "weekdays": [
            "Dim",
            "Lun",
            "Mar",
            "Mer",
            "Jeu",
            "Ven",
            "Sam"
        ]
    },
    "editor": {
        "close": "Fermer",
        "create": {
            "title": "Créer une nouvelle entrée",
            "button": "Nouveau",
            "submit": "Créer"
        },
        "edit": {
            "button": "Editer",
            "title": "Editer Entrée",
            "submit": "Mettre à jour"
        },
        "remove": {
            "button": "Supprimer",
            "title": "Supprimer",
            "submit": "Supprimer",
            "confirm": {
                "_": "Êtes-vous sûr de vouloir supprimer %d lignes ?",
                "1": "Êtes-vous sûr de vouloir supprimer 1 ligne ?"
            }
        },
        "error": {
            "system": "Une erreur système s'est produite"
        },
        "multi": {
            "noMulti": "Ce champ peut être édité individuellement, mais ne fait pas partie d'un groupe. ",
            "title": "Valeurs multiples",
            "restore": "Rétablir modification",
            "info": "Les éléments sélectionnés contiennent différentes valeurs pour cette entrée. Pour modifier et définir tous les éléments de cette entrée à la même valeur, cliquez ou tapez ici, sinon ils conserveront leurs valeurs individuelles."
        }
    },
    "stateRestore": {
        "removeSubmit": "Supprimer",
        "creationModal": {
            "button": "Créer",
            "name": "Nom :",
            "order": "Tri",
            "paging": "Pagination",
            "scroller": "Position du défilement",
            "search": "Recherche",
            "select": "Sélection",
            "toggleLabel": "Inclus :"
        },
        "renameButton": "Renommer"
    },
    "info": "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
    "infoEmpty": "Affichage de 0 à 0 sur 0 entrées",
    "infoFiltered": "(filtrées depuis un total de _MAX_ entrées)",
    "lengthMenu": "Afficher _MENU_ entrées",
    "paginate": {
        "first": "Première",
        "last": "Dernière",
        "next": "Suivante",
        "previous": "Précédente"
    },
    "zeroRecords": "Aucune entrée correspondante trouvée"
        }
    } 
);



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
                
                @elseif (auth()->user()->role == 'rh')
                @include('layouts.navbars.sidebar_rh')

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
    <!-- <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script> -->
    @stack('scripts')

    <!-- <script src="{{ asset('light-bootstrap/js/plugins/jquery.sharrre.js') }}"></script> -->
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <!-- <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-switch.js') }}"></script> -->
   
    <!--  Chartist Plugin  -->
    <!-- <script src="{{ asset('light-bootstrap/js/plugins/chartist.min.js') }}"></script> -->
    <!--  Notifications Plugin    -->
    <!-- <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-notify.js') }}"></script> -->
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="{{ asset('light-bootstrap/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('light-bootstrap/js/demo.js') }}"></script>
    
    
    @stack('js')
    <script>
    

    </script>
</html>