<?php

namespace Aaran\Master\Database\Seeders;

use Aaran\Master\Models\Contact;
use Aaran\Master\Models\ContactDetail;
use Illuminate\Database\Seeder;

class S202_ContactSeeder extends Seeder
{
    public static function run(): void
    {
        Contact::create([
            'vname'=>'XYZ company pvt ltd',
            'gstin'=>'29AWGPV7107B1Z1',
            'company_id'=>'1',
            'user_id'=>'1',
            'active_id'=>'1',
        ]);
        ContactDetail::create([
            'contact_id'=>'1',
            'address_1'=>'7th block',
            'address_2'=>'kuvempu layout',
            'city_id'=>'1',
            'state_id'=>'4',
            'country_id'=>'7',
            'pincode_id'=>'5',
        ]);
    }
}
