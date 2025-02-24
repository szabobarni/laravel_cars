<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Model;

class ModelsSeeder extends Seeder
{

    const ITEMS = [
        "S40",
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
            $model=new Model();
            $model->name=$item;
            $model->save();
        }
    }
}
