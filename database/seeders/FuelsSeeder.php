<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fuel;

class FuelsSeeder extends Seeder
{

    const ITEMS = [
        'Benzin ',
        'Dízel ',
        'Elektromos áram',
        'Ethanol',
        'Sűrített földgáz',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::ITEMS as $item)
        {
            $fuel=new Fuel();
            $fuel->name=$item;
            $fuel->save();
        }
    }
}