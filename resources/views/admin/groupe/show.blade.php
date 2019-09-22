@extends('layouts.datatable')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12"><h4>Liste des étudiants</h4>
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($groupe->etudiants as $etudiant)
                        <tr>
                            <td>{{$etudiant->matricule}}</td>
                            <td>{{$etudiant->nom}}</td>
                            <td>{{$etudiant->prenom}}</td>
                            <td>{{$etudiant->date_naissance}}</td>
                        </tr>
                    @endforeach
                      
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
                            <th>Module</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($groupe->profs as $prof)
                        <tr>
                            @foreach($profs_groupe as $pg)
                             @if($prof->id == $pg->id)
                            <td>{{$pg->module}}</td>
                            @endif
                            @endforeach
                            <td>{{$prof->nom}}</td>
                            <td>{{$prof->prenom}}</td>
                            <td>{{$prof->grade}}</td>
                        </tr>
                        @endforeach
                    </tbody>
             </table>   
        </div>    
    </div>   
</div>
@endsection