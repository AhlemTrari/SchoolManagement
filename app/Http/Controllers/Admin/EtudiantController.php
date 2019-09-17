<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Etudiant;

class EtudiantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
	public function index()
    {
        $etudiants = Etudiant::all();
         return view('admin.etudiant.index')->with([
            'etudiants' => $etudiants,
            ]);
    }

    public function store(Request $request)
    {
        $etudiant = new Etudiant();

            $etudiant->matricule = $request->input('matricule');
            $etudiant->nom = $request->input('nom');
            $etudiant->prenom = $request->input('prenom');
            $etudiant->email = $request->input('email');
            $etudiant->date_naissance = $request->input('date_naissance');
            $etudiant->password = Hash::make($request->input('password'));

            $etudiant->save();


            return redirect('admin/etudiant');
    }

    public function show()
    {
        return view('admin.etudiant.show');
    }

    public function edit(request $request)
    {
        $etudiant = Etudiant::find ($request->id);
        $etudiant->matricule = $request->matricule;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->date_naissance = $request->date_naissance;

        $etudiant->save();
        return response()->json($etudiant);
    }

    public function update(Request $request, $id)
    {
      
        // $etudiant = Etudiant::findOrFail($request->etudiant_id);
        // $etudiant->update($request->all());
       
        // return back();
        $etudiant = Etudiant::find($id);

        $etudiant->matricule = $request->input('matricule');
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->email = $request->input('email');
        $etudiant->date_naissance = $request->input('date_naissance');
                    
        $etudiant->save();

        return redirect('admin/etudiant');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
            
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('admin/etudiant');
            
    }
}
