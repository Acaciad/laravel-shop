<?php

use Illuminate\Database\Seeder;
use App\User;
class CouponCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CouponCode::class, 20)->create();
    }
}
