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
class RelationTableSeeder extends Seeder {

    public function run()
    {
        DB::table('relations')->delete();

        Relatetions::create(array('pet_type_id' => '1', 'service_id' => 2));
        Relatetions::create(array('pet_type_id' => '1', 'service_id' => 3));
        Relatetions::create(array('pet_type_id' => '2', 'service_id' => 4));
        Relatetions::create(array('pet_type_id' => '3', 'service_id' => 2));
        Relatetions::create(array('pet_type_id' => '4', 'service_id' => 2));
        Relatetions::create(array('pet_type_id' => '3', 'service_id' => 1));
    }

}
