<?php

namespace Database\Seeders;

use App\Models\Maker;
use Illuminate\Database\Seeder;
use App\Models\Model;

class ModelsSeeder extends Seeder
{

    const ITEMS = [
        'BMW'=>['I8','M5'],
        'Audi'=>['A4','TT'],
        'Mercedes'=>['SLS','C-class'],
        'Ford'=>['Focus','Fiesto'],
        'Volvo'=>['S40','V40'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::ITEMS as $key => $makers) 
        {
            foreach ($makers as $item) 
            {
                $maker = Maker::where(['name' => $item]);
                $model= new Model();
                $model->maker_id=$maker->id;
                $model->name= $item;
                $model->save();
            }
        }
    }
}
