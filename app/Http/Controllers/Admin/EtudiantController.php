<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Etudiant;
use Exporter;
use Importer;

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

    public function store(Request $request)
    {
        $etudiant = new Etudiant();

            $etudiant->matricule = $request->input('matricule');
            $etudiant->nom = $request->input('nom');
            $etudiant->prenom = $request->input('prenom');
            $etudiant->email = $request->input('email');
            $etudiant->date_naissance = $request->input('date_naissance');
            $etudiant->password = Hash::make($request->input('password'));

            $etudiant->save();


            return redirect('admin/etudiant');
    }

    public function show()
    {
        return view('admin.etudiant.show');
    }

    public function edit(request $request)
    {
        $etudiant = Etudiant::find ($request->id);
        $etudiant->matricule = $request->matricule;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->date_naissance = $request->date_naissance;

        $etudiant->save();
        return response()->json($etudiant);
    }

    public function update(Request $request, $id)
    {
      
        // $etudiant = Etudiant::findOrFail($request->etudiant_id);
        // $etudiant->update($request->all());
       
        // return back();
        $etudiant = Etudiant::find($id);

        $etudiant->matricule = $request->input('matricule');
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->email = $request->input('email');
        $etudiant->date_naissance = $request->input('date_naissance');
                    
        $etudiant->save();

        return redirect('admin/etudiant');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
            
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('admin/etudiant');
            
    }

    // public function import(Request $request)
    // {
    //     if($request->hasFile('liste_etudiants')){
    //         $file = $request->file('liste_etudiants');
    //         $file_name = time().'.'.$file->getClientOriginalExtension();
    //         $file->move(public_path('/uploads/xsl'),$file_name);
    //     }
    //     $path= $request->file('liste_etudiants')->getRealPath();
    //     $excel = Importer::make('Excel');
    //     $excel->load($path);
    //     $collection = $excel->getCollection();
    //     //return json_encode($collection[1][0]);
    //     for ($i=1; $i < count($collection); $i++) { 
    //         $etudiant = new Etudiant();
    //         $etudiant->nom = $collection[$i][0]; //$i hiya la ligne fi excel w 0 hiya colonne w tbedli 3la hsabe ch3ale 3andak mne colonne 0 1 2 3 4
    //         $etudiant->save();
    //     }
        
    //     return redirect('admin/etudiant');

    // }

    public function import(Request $request)
     {
        if($request->hasFile('file')){
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function($reader){})->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $etudiant = new Etudiant();
                    $etudiant->matricule = $value->matricule;
                    $etudiant->nom = $value->nom;
                    $etudiant->prenom = $value->prenom;
                    $etudiant->email = $value->email;
                    $etudiant->date_naissance = $value->date_naissance;
                                
                    $etudiant->save();
                }
            }
        }
        return back();
     }

    public function export()
    {
        $path= $request->file('liste_etudiants');
        $query = DB::table('etudiants');
        $excel = Exporter::make('Excel');
        $excel->loadQuery($query);
        //return $excel->stream($yourFileName);
        return $excel->save($path);
    }
}
