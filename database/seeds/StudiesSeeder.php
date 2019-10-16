<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Study;

class StudiesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
     //   DB::table('studies')->truncate();
        
        $study = new Study();

        $xml  = simplexml_load_file(public_path()."/trials/"."NCT03807102.xml");
        
        $study->nct_id = $xml->id_info->nct_id;
        $study->brief_title = $xml->brief_title;
        $study->official_title = $xml->official_title;
        $study->sponsors = json_encode($xml->sponsors);
        
        
        $study->save();
        
        
    }

}
