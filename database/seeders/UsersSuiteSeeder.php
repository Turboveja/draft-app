<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersSuiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_roulette = Role::pluck('name');

        //Users
        $users = User::factory()->count(50)->create();

        foreach($users as $user){
            $user->syncRoles([$roles_roulette->random()]); //get random role to assign
        }
    }
}
