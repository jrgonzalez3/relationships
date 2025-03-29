<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Phone::create([
            'prefix' => 595,
            'phone_number' => 324232,
            'user_id' => 1
        ]);
        Phone::create([
            'prefix' => 595,
            'phone_number' => 234534,
            'user_id' => 1
        ]);
        Phone::create([
            'prefix' => 595,
            'phone_number' => 232432,
            'user_id' => 1
        ]);
    }
}
