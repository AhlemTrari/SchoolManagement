<?php

namespace App\Http\Controllers\Enseignant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enseignant;

class GroupeController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:enseignant');
    }

    public function index()
    {
    	
        return view('prof.groupes.groupes');
    }
}
