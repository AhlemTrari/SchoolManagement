<?php

use Illuminate\Database\Seeder;
use App\Anonymat;

class AnonymatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agent = new Anonymat();

	    $agent->nom = 'Agent';
	    $agent->prenom = 'agent';
	    $agent->email = 'anonymat@anonymat.com';
	    $agent->password = Hash::make('password');

	    $agent->save();
    }
}
