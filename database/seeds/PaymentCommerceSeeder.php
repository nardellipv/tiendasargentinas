<?php

use Illuminate\Database\Seeder;
use App\Payment_Commerce;

class PaymentCommerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Payment_Commerce::class, 10)->create();
    }
}
