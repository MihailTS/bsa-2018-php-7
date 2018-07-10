<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Entity\Currency;

class CurrencyTableSeeder extends Seeder
{
    private const ITEMS_COUNT = 20;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currency')->delete();

        $users = factory(Currency::class, self::ITEMS_COUNT)->create();
    }
}
