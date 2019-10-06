<?php

namespace App\Http\Controllers\Anonymat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paquet;
use App\Module;
use App\Etudiant;
use App\EtudiantPaquet;

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
         return view('anonymat.accueil')->with([
            'paquets' => $paquets,
            'modules' => $modules , 
            'etudiants' => $etudiants,
            ]);
        $etudiants = DB::table('etudiants')->orderBy('nom', 'desc')->get();


    }

    public function store(Request $request)
    {
        $paquet = new Paquet();

            $paquet->libelle = $request->input('libelle');
            $paquet->module_id = $request->input('module_id');

            $etudiants =  $request->input('etudiant');

            foreach ($etudiants as $key => $value) {

            $etudiant = Etudiant::find($value);
            $etudiant->save();
         }  $paquet->save();

        $etudiant_paquet = new EtudiantPaquet();
        
            $etudiant_paquet->etudiant_id =   $request->input('etudiant_id');  
            $etudiant_paquet->paquet_id =   $request->input('paquet_id');  
            
            $etudiant_paquet->save();


            return back();

    }

    
}
