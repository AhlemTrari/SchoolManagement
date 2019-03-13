<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Enseignant;

class EnseignantController extends Controller
{
	public function index()
    {
        $profs = Enseignant::all();
         return view('admin.prof.index')->with([
            'profs' => $profs,
            ]);
    }

    public function store(userRequest $request)
    {
        $membre = new User();
        if($request->hasFile('img')){
            $file = $request->file('img');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/photo'),$file_name);
        }
        else{
            $file_name="userDefault.png";
        }

            $membre->nom = $request->input('nom');
            $membre->prenom = $request->input('prenom');
            $membre->email = $request->input('email');
            $membre->date_naissance = $request->input('date_naissance');
            $membre->grade = $request->input('grade');
            $membre->password = Hash::make($request->input('password'));
            $membre->dept_id = $request->input('dept_id');
            $membre->num_tel = $request->input('num_tel');
            $membre->photo = 'uploads/photo/'.$file_name;

            $membre->save();
        	return redirect('admin/prof');

    }

    public function ExportProfs()
    {
    	Excel::create('enseignants',function($excel){
    		$excel-> sheet('enseignants',function($sheet){
    			$sheet->loadView('admin.prof.index');
    		});
    	})->export('xlsx');
    }

    public function Import()
    {
    	Excel::load(Input::file('enseignant'),function($reader){
    		$reader->each(function($sheet){
    			Enseignant::firstOrCreate($sheet->toArray());
    		});
    	});
    }
}
