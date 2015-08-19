<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetTypesTableSeeder
 *
 * @author pramodkadam
 */
class PetTypesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pet_types')->delete();

        PetTypes::create(array('name' => 'cat'));
        PetTypes::create(array('name' => 'dog'));
        PetTypes::create(array('name' => 'rabits'));
        PetTypes::create(array('name' => 'tortoise'));
        PetTypes::create(array('name' => 'snake'));
    }

}
