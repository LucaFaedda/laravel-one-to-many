<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Str;


use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'VueJs'];

        foreach($types as $type){
            $newType = new Type();

            $newType->name = $type;
            $newType->slug = Str::slug($newType->name, '-');

            $newType->save();
        }
    }
}
