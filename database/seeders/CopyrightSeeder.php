<?php

namespace Database\Seeders;

use App\Models\Copyright;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CopyrightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Copyright::create([
            'uuid' => '5290ff0d-9403-480d-99b9-0262f001d8f5',
            'name' => 'CC'
        ]);

        $names = [
            'Reproduction Right'
        ];

        foreach ($names as $name) {
            Copyright::create([
                'uuid' => Str::uuid(),
                'name' => $name
            ]);
        }
    }
}
