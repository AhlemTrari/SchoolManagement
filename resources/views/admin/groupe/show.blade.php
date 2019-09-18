@extends('layouts.datatable')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12"><h4>Liste des étudiants</h4>
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                  <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
             </table>   
        </div>    
    </div> 
    <div class="row"><br><br></div>
     <div class="row">
        <div class="col-12"><h4>Liste des enseignants</h4>
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                  <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                        </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
             </table>   
        </div>    
    </div>   
</div>
@endsection