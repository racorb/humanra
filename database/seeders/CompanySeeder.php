<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'company_name' => 'Humanra',
            'email' => 'admin@company.com',
            'phone' => '+99455 821-56-73',
            'location' => 'Azerbaycan, Bakı',
            'agent' => 'Rəşad Ələkbərov',
            'detail' => 'Humanra MMC şirkəti Ələkbərov Rəşad tərəfindən yaradılmışdır. BU yaradılmış olan Humanra sistemi vahid paltformadır. Hər cür xidmət bu platfomrda hazırlanmışdır.',
            'type' => 1,
        ]);

        DB::table('companies')->insert([
            'company_name' => 'Company Name',
            'area' => 1,
            'email' => 'test@company.com',
            'phone' => '+99455 555-55-55',
            'location' => 'Azerbaycan, Bakı',
            'agent' => 'Name Surname',
            'detail' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ]);
    }
}
