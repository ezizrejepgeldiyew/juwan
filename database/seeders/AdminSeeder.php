<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'      => 'Eziz',
            'surname'   => 'Rejepgeldiyew',
            'email'     => 'ezizrejepgeldiyew@gmail.com',
            'password'  => Hash::make('eziz2003pas'),
            'device'    => 'web'
        ]);
        $user->assignRole(['admin']);
    }
}
