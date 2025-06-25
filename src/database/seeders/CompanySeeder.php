<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::firstOrCreate([
            'logo' => '',
            'name' => 'najwa',
            'phone' => '081912804190',
            'address' => 'jalan rasa rindu',
            'state' => 'jakarta',
            'country' => 'indonesia',
            'postcode' => '12345',
        ]);
    }
}
