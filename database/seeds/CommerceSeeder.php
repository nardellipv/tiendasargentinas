<?php

use Illuminate\Database\Seeder;
use App\Commerce;

class CommerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Commerce::class, 10)->create();
    }
}
