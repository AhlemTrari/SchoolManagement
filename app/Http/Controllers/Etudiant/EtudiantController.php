<?php

namespace App\Http\Controllers\Etudiant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EtudiantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct()
    {
        $this->middleware('auth:etudiant');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('etudiant.accueil');
    }
}
