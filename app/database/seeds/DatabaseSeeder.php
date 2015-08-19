<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('PetTypesTableSeeder');
        $this->command->info('PetTypes table seeded!');
        $this->call('ServicesTableSeeder');
        $this->command->info('Services table seeded!');
    }

}
