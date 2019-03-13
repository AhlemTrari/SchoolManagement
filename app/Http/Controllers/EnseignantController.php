<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class EnseignantController extends Controller
{
    public function ExportProfs()
    {
    	Excel::create('enseignants',function($excel){
    		$excel-> sheet('enseignants',function($sheet){
    			$sheet->loadView('ExportProfs');
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
