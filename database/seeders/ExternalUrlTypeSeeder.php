<?php

namespace Database\Seeders;

use App\Models\ExternalUrlType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExternalUrlTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item_example = ExternalUrlType::create([
            'uuid' => '0c2d28fe-890f-4365-9b17-c134cd7ea8f8',
            'name' => 'Spotify'
        ]);

        $names = [
            'Youtube', 'Instagram'
        ];

        foreach ($names as $name) {
            ExternalUrlType::create([
                'uuid' => Str::uuid(),
                'name' => $name
            ]);
        }
    }
}
