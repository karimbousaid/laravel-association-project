<?php

use Illuminate\Database\Seeder;

class AssociationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nbAssociation = (int)$this->command->ask("How many of association you want generate ?", 30);
        Factory('App\Association',$nbAssociation)->create();
    }
}
