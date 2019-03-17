<h1>liste des étudiants</h1>
 <table border=1>
 @foreach($etudiants as $etudiant)
 <tr>
 <td>{{$etudiant->id}}</td>
 <td>{{$etudiant->matricule}}</td>

 <td>{{$etudiant->nom}}</td>
 <td>{{$etudiant->prenom}}</td>
 <td>{{$etudiant->date_naissance}}</td>
 <td>{{$etudiant->email}}</td>
 <td>{{$etudiant->password}}</td>
 <td>{{$etudiant->photo}}</td>


 </tr>
 @endforeach
 </table>