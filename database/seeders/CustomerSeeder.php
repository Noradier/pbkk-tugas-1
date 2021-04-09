<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('dbo.customers')->insert([
            'first_name' => "Dorthea",
            'last_name'  => "Walker",
            'phone'      => "",
            'email'      => "dorthea.walker@aol.com",
            'street'     => "11 Third St. ",
            'city'       => "Port Washington",
            'state'      => "NY",
            'zip_code'   => "11050"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Alane",
            'last_name'  => "Munoz",
            'phone'      => "(914) 706-7576",
            'email'      => "alane.munoz@gmail.com",
            'street'     => "8 Strawberry Dr. ",
            'city'       => "Yonkers",
            'state'      => "NY",
            'zip_code'   => "10701"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Ayana",
            'last_name'  => "Keith",
            'phone'      => "(805) 230-2101",
            'email'      => "ayana.keith@hotmail.com",
            'street'     => "182 Thorne Road ",
            'city'       => "Oxnard",
            'state'      => "CA",
            'zip_code'   => "93035"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Caridad",
            'last_name'  => "Compton",
            'phone'      => "",
            'email'      => "caridad.compton@aol.com",
            'street'     => "9575 SW. Kingston Court ",
            'city'       => "San Lorenzo",
            'state'      => "CA",
            'zip_code'   => "94580"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Earline",
            'last_name'  => "Ballard",
            'phone'      => "",
            'email'      => "earline.ballard@hotmail.com",
            'street'     => "939 Lyme Road ",
            'city'       => "Mount Vernon",
            'state'      => "NY",
            'zip_code'   => "10550"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Nathanael",
            'last_name'  => "Bradley",
            'phone'      => "",
            'email'      => "nathanael.bradley@aol.com",
            'street'     => "58 Third St. ",
            'city'       => "Amsterdam",
            'state'      => "NY",
            'zip_code'   => "12010"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Chasidy",
            'last_name'  => "Tran",
            'phone'      => "",
            'email'      => "chasidy.tran@msn.com",
            'street'     => "9286 Anderson Street ",
            'city'       => "Vista",
            'state'      => "CA",
            'zip_code'   => "92083"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Janella",
            'last_name'  => "Bright",
            'phone'      => "(507) 616-2958",
            'email'      => "janella.bright@aol.com",
            'street'     => "7317 Tower Dr. ",
            'city'       => "Rochester",
            'state'      => "NY",
            'zip_code'   => "14606"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Josie",
            'last_name'  => "Schultz",
            'phone'      => "",
            'email'      => "josie.schultz@hotmail.com",
            'street'     => "225 Mammoth Street ",
            'city'       => "Canyon Country",
            'state'      => "CA",
            'zip_code'   => "91387"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Ellsworth",
            'last_name'  => "Michael",
            'phone'      => "",
            'email'      => "ellsworth.michael@yahoo.com",
            'street'     => "9982 White St. ",
            'city'       => "Carmel",
            'state'      => "NY",
            'zip_code'   => "10512"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Jennette",
            'last_name'  => "Wooten",
            'phone'      => "",
            'email'      => "jennette.wooten@msn.com",
            'street'     => "8221 Bow Ridge Lane ",
            'city'       => "Rowlett",
            'state'      => "TX",
            'zip_code'   => "75088"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Cassandra",
            'last_name'  => "Nichols",
            'phone'      => "",
            'email'      => "cassandra.nichols@yahoo.com",
            'street'     => "4 Glenwood Circle ",
            'city'       => "Hicksville",
            'state'      => "NY",
            'zip_code'   => "11801"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Courtney",
            'last_name'  => "Wyatt",
            'phone'      => "",
            'email'      => "courtney.wyatt@gmail.com",
            'street'     => "369 Arrowhead St. ",
            'city'       => "Garden City",
            'state'      => "NY",
            'zip_code'   => "11530"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Terese",
            'last_name'  => "Palmer",
            'phone'      => "",
            'email'      => "terese.palmer@hotmail.com",
            'street'     => "8 Sugar Drive ",
            'city'       => "Bay Shore",
            'state'      => "NY",
            'zip_code'   => "11706"
        ]);


        DB::table('dbo.customers')->insert([
            'first_name' => "Sherita",
            'last_name'  => "Cherry",
            'phone'      => "",
            'email'      => "sherita.cherry@gmail.com",
            'street'     => "9636 Old Cedarwood Street ",
            'city'       => "Liverpool",
            'state'      => "NY",
            'zip_code'   => "13090"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Serina",
            'last_name'  => "Hensley",
            'phone'      => "",
            'email'      => "serina.hensley@yahoo.com",
            'street'     => "53 Proctor Drive ",
            'city'       => "Jamaica",
            'state'      => "NY",
            'zip_code'   => "11432"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Jeni",
            'last_name'  => "Farley",
            'phone'      => "",
            'email'      => "jeni.farley@aol.com",
            'street'     => "4 Mill Lane ",
            'city'       => "Richmond Hill",
            'state'      => "NY",
            'zip_code'   => "11418"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Everett",
            'last_name'  => "Vega",
            'phone'      => "",
            'email'      => "everett.vega@yahoo.com",
            'street'     => "7859 James Ave. ",
            'city'       => "Holbrook",
            'state'      => "NY",
            'zip_code'   => "11741"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Latosha",
            'last_name'  => "Dalton",
            'phone'      => "(661) 529-4501",
            'email'      => "latosha.dalton@yahoo.com",
            'street'     => "59 E. Wintergreen Ave. ",
            'city'       => "Bakersfield",
            'state'      => "CA",
            'zip_code'   => "93306"
        ]);

        DB::table('dbo.customers')->insert([
            'first_name' => "Romelia",
            'last_name'  => "Myers",
            'phone'      => "",
            'email'      => "romelia.myers@msn.com",
            'street'     => "8630 Brook St. ",
            'city'       => "Garden City",
            'state'      => "NY",
            'zip_code'   => "11530"
        ]);
    }
}
