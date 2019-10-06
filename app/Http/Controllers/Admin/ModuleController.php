<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Module;

class ModuleController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
	public function index()
    {
        $modules = Module::all();
         return view('admin.module.index')->with([
            'modules' => $modules,
            ]);
    }

    public function store(Request $request)
    {
        $module = new Module();
        $module->Libelle = $request->input('libelle');

        $module->save();

    	return back();

    }

    public function destroy($id)
    {
            
        $module = Module::find($id);
        $module->delete();
        return back();
    }
}
