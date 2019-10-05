<?php

namespace App\Http\Controllers\Enseignant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enseignant;
use App\Groupe;
use App\Absence;

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
    	$groupe = Groupe::find($id);

        return view('prof.groupes.show')->with([
        	'groupe' => $groupe]);
    }

    public function presence(Request $request)
    {
        $etudients = $request->input('etudient_id');

        foreach ($etudients as $key => $value) 
        {
            if ($request->input('absence')[$key] == "A") 
            {
                $Absence = new Absence();
                $Absence->etudiant_id = $request->input('etudient_id')[$key];
                $Absence->seance_id = $request->input('seance_id');

                /*$etudient_id = $request->input('etudient_id')[$key];
                $etudient = Etudiant::find($etudient_id);
                DB::select("UPDATE etudiants SET  nbr_absences = nbr_absences +1 WHERE etudiants.id = ?"
                , [$etudient_id]);
                $etudient->save();*/

                $Absence->save();
            }
        }
        return back();
    }

}
