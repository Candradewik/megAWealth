<?php

namespace Database\Seeders;

use App\Models\RealEstate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealEstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SALE
            //Apartment
                RealEstate::query()->insert([
                    'sales_type' => 'Sale',
                    'building_type' => 'Apartment',
                    'price' => 899000,
                    'location' => '800 Marbella Ln, Sanford, FL 32771',
                    'image' => 'buyapartment1.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Sale',
                    'building_type' => 'Apartment',
                    'price' => 866890,
                    'location' => '201 Sanford Ave, Sanford, FL 32771',
                    'image' => 'buyapartment2.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Sale',
                    'building_type' => 'Apartment',
                    'price' => 799050,
                    'location' => '700 Altamira Cir, Altamonte Springs, FL 32701',
                    'image' => 'buyapartment3.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Sale',
                    'building_type' => 'Apartment',
                    'price' => 959900,
                    'location' => '815 Water St, Tampa, FL 33602',
                    'image' => 'buyapartment4.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Sale',
                    'building_type' => 'Apartment',
                    'price' => 890000,
                    'location' => '2211 Amble Way, Land O Lakes, FL 34639',
                    'image' => 'buyapartment5.jpg'
                ]);
            //House
                RealEstate::query()->insert([
                    'sales_type' => 'Sale',
                    'building_type' => 'House',
                    'price' => 670000,
                    'location' => '2470 Dubai St, Kissimmee, FL 34747',
                    'image' => 'buyhouse1.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Sale',
                    'building_type' => 'House',
                    'price' => 615000,
                    'location' => '410 S Salisbury Ave, Deland, FL 32720',
                    'image' => 'buyhouse2.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Sale',
                    'building_type' => 'House',
                    'price' => 495000,
                    'location' => '2463 Felce Ct, Davenport, FL 33897',
                    'image' => 'buyhouse3.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Sale',
                    'building_type' => 'House',
                    'price' => 210000,
                    'location' => '119 Ridge Ave, Winter Haven, FL 33880',
                    'image' => 'buyhouse4.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Sale',
                    'building_type' => 'House',
                    'price' => 750000,
                    'location' => '938 Success Ave, Lakeland, FL 33803',
                    'image' => 'buyhouse5.jpg'
                ]);

        //RENT
            //Apartment
                RealEstate::query()->insert([
                    'sales_type' => 'Rent',
                    'building_type' => 'Apartment',
                    'price' => 2600,
                    'location' => '16th St, Jersey City, NJ 07310',
                    'image' => 'rentapartment1.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Rent',
                    'building_type' => 'Apartment',
                    'price' => 2850,
                    'location' => 'Monitor St, Jersey City, NJ 07304',
                    'image' => 'rentapartment2.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Rent',
                    'building_type' => 'Apartment',
                    'price' => 5000,
                    'location' => '6165 Avenue Isla Verde, Carolina, PR 00979',
                    'image' => 'rentapartment3.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Rent',
                    'building_type' => 'Apartment',
                    'price' => 2250,
                    'location' => '5757 Isla Verde, Carolina, PR 00979',
                    'image' => 'rentapartment4.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Rent',
                    'building_type' => 'Apartment',
                    'price' => 2050,
                    'location' => '3100 Domain Cir, Kissimmee, FL 34747',
                    'image' => 'rentapartment5.jpg'
                ]);
            //House
                RealEstate::query()->insert([
                    'sales_type' => 'Rent',
                    'building_type' => 'House',
                    'price' => 2470,
                    'location' => '335 Piano Ln, Davenport, FL 33896',
                    'image' => 'renthouse1.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Rent',
                    'building_type' => 'House',
                    'price' => 2199,
                    'location' => '763 Berwick Dr, Davenport, FL 33897',
                    'image' => 'renthouse2.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Rent',
                    'building_type' => 'House',
                    'price' => 2399,
                    'location' => '1132 Hendon Loop, Haines City, FL 33844',
                    'image' => 'renthouse3.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Rent',
                    'building_type' => 'House',
                    'price' => 15000,
                    'location' => '2210 General Del Valle, San Juan, PR 00913',
                    'image' => 'renthouse4.jpg'
                ]);
                RealEstate::query()->insert([
                    'sales_type' => 'Rent',
                    'building_type' => 'House',
                    'price' => 2495,
                    'location' => '10601 Sheridan St, California City, CA 93505',
                    'image' => 'renthouse5.jpg'
                ]);
    }
}
