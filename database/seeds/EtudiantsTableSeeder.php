<?php

use Illuminate\Database\Seeder;
use App\Etudiant;

class EtudiantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $etudiant = new Etudiant();

	    $etudiant->matricule = '00110011';
	    $etudiant->nom = 'Etudiant';
	    $etudiant->prenom = 'etudiant';
	    $etudiant->email = 'etudiant@etudiant.com';
	    $etudiant->password = Hash::make('password');

	    $etudiant->save();
    }
}
