<?php

use Illuminate\Database\Seeder;
use App\Campany;

class CampaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Campan = [
        	['name'=>'TresCompany', 'location'=>'Kimironko']
        ];
        foreach ($Campan as $Campany) {
        	Campany::create($Campany);
        }
    }
}
