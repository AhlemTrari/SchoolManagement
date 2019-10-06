<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\support\Facades\DB;
use App\Etudiant;
use App\Groupe;
use App\Module;
use App\Enseignant;
use App\Seance;
use App\ModuleGroupe;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $etudiants = DB::table('etudiants')->orderBy('nom', 'desc')->where('groupe_id',NULL)->get();
        $profs = Enseignant::all();
        $groupes = Groupe::all();
        $modules = Module::all();
        

        return view('admin.groupe.index')->with([
            'etudiants' => $etudiants,
            'profs' => $profs,
            'groupes' => $groupes,
            'modules' => $modules,

            ]);;
    }
    
     public function show($id)
    {
        $groupe = Groupe::find($id);
        $profs_groupe = DB::select("SELECT eg.module , e.id  
                                from enseignants e, groupes g, enseignant_groupe eg 
                                where e.id = eg.enseignant_id and g.id = eg.groupe_id and g.id = $id");
        return view('admin.groupe.show')->with([
            'groupe' => $groupe,
            'profs_groupe' => $profs_groupe
        ]);
    }

    public function store(Request $request)
    {

        $groupe = new Groupe;

        $groupe->nom = $request->input('nom');
        $groupe->filiere = $request->input('filiere');
        $groupe->niveau = $request->input('niveau');

        $groupe->save();

        $etudiants =  $request->input('etudiant');

        foreach ($etudiants as $key => $value) {

            $etudiant = Etudiant::find($value);
            $etudiant->groupe_id = $groupe->id;
            $etudiant->save();
         }

         return redirect('admin/groupe');
    }

    
    public function update(Request $request, $id)
    {
        
        $groupe = Groupe::find($id);
        $groupe->nom = $request->input('nom');
        $groupe->filiere = $request->input('filiere');
        $groupe->niveau = $request->input('niveau');

        $groupe->save();


        $etudiants = DB::table('etudiants')
             ->where('groupe_id','=',$id)
             ->update(['groupe_id' => NULL]);


        $etudiants =  $request->input('etudiant');
        foreach ($etudiants as $key => $value) {

            $etudiant = Etudiant::find($value);
            $etudiant->groupe_id = $groupe->id;
            $etudiant->save();
         }

         return redirect('admin/groupe');

    }

    
    public function destroy($id)
    {
        $groupe = Groupe::find($id);
        $groupe->delete();
        return redirect('admin/groupe');
    }

    public function affecter(Request $request, $id)
    {  

        $profid=$request->input('prof');
        $prof = Enseignant::find($profid);
        $seance= new Seance();
        $seance->jour=$request->input('jour');
        $seance->heure=$request->input('heure');
        $seance->groupe_id=$id;
        $seance->module_id=$prof->module_id;
        $mgrp= New ModuleGroupe();
        $mgrp->groupe_id=$id;
        $mgrp->module_id=$prof->module_id;

        
   
        $mgrp->save();
        $seance->save();

        return redirect('admin/groupe');
    }
}
