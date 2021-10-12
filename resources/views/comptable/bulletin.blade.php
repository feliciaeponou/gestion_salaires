
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">

                    <div class="card-header ">
                            <h1 class="card-title">Bulletin de paiement </h1>
</div>
                       
                        <div class="card-body  table-responsive">

                      

                            <table id="example" class="table table-hover table-striped">
                                <thead>
                                    <th>Matricule</th>
                                    <th>Nom & Prénom(s)</th>
                                    <th>Categorie</th>
                                    <th>Nombre Séances</th>
                                    
                                </thead>
                                
                                <tbody>

                                @foreach ($datas as $data)
        
        <tr>
            <td>{{ $data->matricule }}</td>
            <td>{{ $data->nom_prenoms }}</td>
            <td>{{ $data->categorie }}</td>
            <td>{{ $data->nbSeances }}</td>
            <td></td>
        </tr>
        @endforeach

                                
                                    
</tbody>
</table>

</div>
                