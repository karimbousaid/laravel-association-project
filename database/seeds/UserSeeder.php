<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nbAssociation = (int)$this->command->ask("How many of users you want to generate ?", 10);
        Factory('App\User',$nbAssociation)->create();    
    }
}
