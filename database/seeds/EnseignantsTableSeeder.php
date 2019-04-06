<?php

use Illuminate\Database\Seeder;
use App\Enseignant;

class EnseignantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $prof = new Enseignant();

	    $prof->nom = 'Prof';
	    $prof->prenom = 'prof';
	    $prof->email = 'prof@prof.com';
	    $prof->password = Hash::make('password');

	    $prof->save();
    }
}
