<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maker;

class MakersSeeder extends Seeder
{

    const ITEMS = [
        'BMW',
        'Audi',
        'Mercedes',
        'Ford',
        'Volvo',
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
            $maker=new Maker();
            $maker->name=$item;
            $maker->logo=null;
            $maker->save();
        }
    }
}
