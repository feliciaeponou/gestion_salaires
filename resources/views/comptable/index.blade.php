@extends('layouts.app', ['activePage' => 'liste_employes', 'title' => 'Gestion Des Salaires | Liste des employés', 'navName' => 'Liste des employés', 'activeButton' => 'laravel'])

@section('content')

{{$dataTable->table()}}
  
@endsection
@push('scripts')
    {{$dataTable->scripts()}}
@endpush
