<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(RolePermisionSuiteSeeder::class);
//        $this->call(UsersSuiteSeeder::class);


//        $this->call(GenreSeeder::class);
        $this->call(ExternalUrlTypeSeeder::class);
        $this->call(AlbumTypeSeeder::class);
        $this->call(CopyrightSeeder::class);
//        $this->call(GenreSeeder::class);
//        $this->call(GenreSeeder::class);
    }
}
