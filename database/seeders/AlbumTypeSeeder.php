<?php

namespace Database\Seeders;

use App\Models\AlbumType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AlbumTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlbumType::create([
            'uuid' => '331c41fd-ac9a-445f-8b18-49653be5b98c',
            'name' => 'LP'
        ]);

        $names = [
            'EP', 'Single'
        ];

        foreach ($names as $name) {
            AlbumType::create([
                'uuid' => Str::uuid(),
                'name' => $name
            ]);
        }
    }
}
