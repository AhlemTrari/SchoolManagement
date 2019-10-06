<?php

namespace App\Http\Controllers\Enseignant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\DB;
use App\Enseignant;
use App\Groupe;
use App\Absence;
use App\Seance;
use App\Exclu;

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

    public function show($id)
    {

        $seances = Seance::All();

        $exclus = DB::table('exclus')->where('module_id',Auth::user()->module_id)->get();
    	$groupe = Groupe::find($id);

        return view('prof.groupes.show')->with([
            'groupe' => $groupe,
        	'exclus' => $exclus,
        ]);
    }

    public function presence(Request $request)
    {
        $etudients = $request->input('etudient_id');
        $seance= Seance::find($request->input('seance_id'));
        foreach ($etudients as $key => $value) 
        {
            if ($request->input('presence')[$key] == "A") 
            {   
                $Absence = new Absence();
                $Absence->etudiant_id = $request->input('etudient_id')[$key];
                $Absence->seance_id = $request->input('seance_id');
                $Absence->module_id = $seance->module_id;
                $Absence->save();

                $nbr_abs = DB::table('absences')->where('etudiant_id', $request->input('etudient_id')[$key])->count();
                if($nbr_abs = 3){
                    $exclu = new Exclu();
                    $exclu->etudiant_id = $request->input('etudient_id')[$key];
                    $exclu->module_id = $seance->module_id;

                    $exclu->save();
                }
            }
        }

        return back();
    }
    

}
