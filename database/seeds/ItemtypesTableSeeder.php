<?php

use Illuminate\Database\Seeder;
use App\Itemtype;

class ItemtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Itemtypes = [
        	['status'=>'brand new'],
        	['status'=>'used']
        ];
        foreach ($Itemtypes as $Itemtype) {
        	Itemtype::create($Itemtype);
        }
    }
}
