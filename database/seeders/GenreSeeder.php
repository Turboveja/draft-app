<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'uuid' => '1e2dad6d-190a-41cf-ad97-1d9007cd2bfc',
            'name' => 'Metal'
        ]);

        $names = [
            'Rock', 'Pop', 'Punk', 'Jazz', 'Blues', 'Country', 'Hip-Hop', 'Electronic'
        ];

        foreach ($names as $name) {
            Genre::create([
                'uuid' => Str::uuid(),
                'name' => $name
            ]);
        }
    }
}
