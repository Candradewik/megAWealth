<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Office;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::query()->insert([
            'office_name' => 'Washington Office',
            'image' => 'office1.jpg',
            'address' => '1269 Hickory Lane',
            'contact_name' => 'Mikal Vaz',
            'phone' => 202528655711
        ]);

        Office::query()->insert([
            'office_name' => 'Minnesota Office',
            'image' => 'office2.jpg',
            'address' => '4169 Libby Street',
            'contact_name' => 'Rico Tan',
            'phone' => 310303127812
        ]);

        Office::query()->insert([
            'office_name' => 'France Office',
            'image' => 'office3.jpg',
            'address' => '62 rue Adolphe Wurtz',
            'contact_name' => 'Kate Grace',
            'phone' => 014632053613
        ]);

        Office::query()->insert([
            'office_name' => 'Japan Office',
            'image' => 'office4.jpg',
            'address' => '377-1050, Kitagawa, Saitama',
            'contact_name' => 'Aya Wencl',
            'phone' => 811452261521
        ]);

        Office::query()->insert([
            'office_name' => 'New Jersey Office',
            'image' => 'office5.jpg',
            'address' => '3707 Hilltop Haven Drive',
            'contact_name' => 'Meg Volin',
            'phone' => 973813628814
        ]);

        Office::query()->insert([
            'office_name' => 'California Office',
            'image' => 'office6.jpg',
            'address' => '1033 Rainbow Road',
            'contact_name' => 'Nick Lay',
            'phone' => 850377940215
        ]);
    }
}
