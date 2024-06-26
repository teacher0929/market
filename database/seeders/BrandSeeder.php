<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Ülker',
            'Eti',
            'Içim',
            'Hasar',
        ];

        foreach ($objs as $obj) {
            Brand::create(['name' => $obj]);
        }
    }
}
