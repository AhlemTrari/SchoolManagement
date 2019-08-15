<?php

namespace App\Http\Controllers\Admin;

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
}
