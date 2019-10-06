<?php

namespace App\Http\Controllers\Anonymat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paquet;
use App\Module;
use App\Groupe;
use App\Etudiant;

class AnonymatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct()
    {
        $this->middleware('auth:anonymat');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
       
        public function index()
    {
        $paquets = Paquet::all();
        $modules = Module::all();
        $etudiants = Etudiant::all();
        $groupes = Groupe::all();
         return view('anonymat.accueil')->with([
            'paquets' => $paquets,
            'modules' => $modules , 
            'etudiants' => $etudiants,
            'groupes' => $groupes,
            ]);
        $etudiants = DB::table('etudiants')->orderBy('nom', 'desc')->where('groupe_id',NULL)->get();


    }

    public function store(Request $request)
    {
        $paquet = new Paquet();

            $paquet->libelle = $request->input('libelle');
            $paquet->module_id = $request->input('module_id');

            $etudiants =  $request->input('etudiant');

            foreach ($etudiants as $key => $value) {

            $etudiant = Etudiant::find($value);
            $etudiant->groupe_id = $request->input('groupe_id');;
            $etudiant->save();
         }

            $paquet->save();


            return back();

    }

    
}
