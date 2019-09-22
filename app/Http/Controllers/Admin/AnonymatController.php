<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Anonymat;

class AnonymatController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anonymats = Anonymat::all();
         return view('admin.anonymat.index')->with([
            'anonymats' => $anonymats,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $membre = new Anonymat();
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
            $membre->photo = 'uploads/photo/'.$file_name;
            $membre->date_naissance = $request->input('date_naissance');
            $membre->email = $request->input('email');
            $membre->password = Hash::make($request->input('password'));
            $membre->num_tel = $request->input('num_tel');
            $membre->save();
            return redirect('admin/anonymat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $membre = Anonymat::find($id);

        $membre->nom = $request->input('nom');
        $membre->prenom = $request->input('prenom');
        $membre->date_naissance = $request->input('date_naissance');
        $membre->email = $request->input('email');
        $membre->num_tel = $request->input('num_tel');

        $membre->save();
        return redirect('admin/anonymat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $membre = Anonymat::find($id);
        $membre->delete();
        return redirect('admin/anonymat');
    }
}
