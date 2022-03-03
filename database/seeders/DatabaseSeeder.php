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
        $this->call(RolePermisionSuiteSeeder::class);
        $this->call(UsersSuiteSeeder::class);
        $this->call(CategoriesProductsSeeder::class);
    }
}
