<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServicesTableSeeder
 *
 * @author pramodkadam
 */
class ServicesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('services')->delete();

        Services::create(array('name' => 'Washing'));
        Services::create(array('name' => 'Shampooing'));
        Services::create(array('name' => 'Pedicure'));
        Services::create(array('name' => 'Manicure'));
        Services::create(array('name' => 'Polishing'));
    }

}
