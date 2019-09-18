<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;
use App\Enseignant;

class EnseignantController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
	public function index()
    {
        $profs = Enseignant::all();
         return view('admin.prof.index')->with([
            'profs' => $profs,
            ]);
    }

    public function store(Request $request)
    {
        $prof = new Enseignant();
        if($request->hasFile('img')){
            $file = $request->file('img');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/photo'),$file_name);
        }
        else{
            $file_name="userDefault.png";
        }

            $prof->nom = $request->input('nom');
            $prof->prenom = $request->input('prenom');
            $prof->grade = $request->input('grade');
            $prof->email = $request->input('email');
            $prof->date_naissance = $request->input('date_naissance');
            $prof->password = Hash::make($request->input('password'));
            $prof->dept_id = '1';
            $prof->num_tel = $request->input('num_tel');
            $prof->photo = 'uploads/photo/'.$file_name;

            $prof->save();

        	return redirect('admin/enseignant');

    }

    public function update(Request $request, $id)
    {

        $prof = Enseignant::find($id);

        $prof->nom = $request->input('nom');
        $prof->prenom = $request->input('prenom');
        $prof->grade = $request->input('grade');
        $prof->email = $request->input('email');
        $prof->date_naissance = $request->input('date_naissance');
        $prof->num_tel = $request->input('num_tel');
                    
        $prof->save();

        return redirect('admin/enseignant');

    }

    public function destroy($id)
    {
            
        $prof = Enseignant::find($id);
        $prof->delete();
        return redirect('admin/enseignant');


        public function show()
    {
        return view('admin.prof.show');
    }
         public function param()
    {
        return view('admin.prof.param');
    }
    public function password(){

        return view('admin.prof.password');
    }
    public function competence(){

        return view('admin.prof.competence');
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

