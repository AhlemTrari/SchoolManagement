<?php

namespace App\Http\Controllers\Anonymat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('anonymat.accueil');
    }
}
