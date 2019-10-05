<?php

namespace App\Http\Controllers\Anonymat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Module;
use App\Paquet;

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
         return view('anonymat.accueil')->with([
            'paquets' => $paquets,
            ]);
    }

        public function store(Request $request)
    {

        $paquet = new Paquet();

            $paquet->Libelle = $request->input('Libelle');
            $paquet->save();

            return redirect('anonymat');

         
    }
}
