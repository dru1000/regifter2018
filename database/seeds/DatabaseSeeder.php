<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'Dru',
            'email' => 'dru1000@gmail.com',
            'password' => bcrypt('dru420'),
        ]);

        DB::table('retailers')->insert([
            'name' => 'Bunnings',
            'logo' => 'bunnings.png',
            'url' => 'bunnings',
            'active' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('retailers')->insert([
            'name' => 'The Warehouse',
            'logo' => 'the_warehouse.png',
            'url' => 'the-warehouse',
            'active' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('retailers')->insert([
            'name' => 'Kathmandu',
            'logo' => 'kathmandu.png',
            'url' => 'kathmandu',
            'active' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('retailers')->insert([
            'name' => 'Mitre 10',
            'logo' => 'mitre_10.png',
            'url' => 'mitre-10',
            'active' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('gift_cards')->insert([
            'user_id' => '1',
            'retailer_id' => '1',
            'serial' => '123456789',
            'value' => '100',
            'discount' => '20',
            'sale_price' => '80',
            'active' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('gift_cards')->insert([
            'user_id' => '1',
            'retailer_id' => '1',
            'serial' => '123456789',
            'value' => '50',
            'discount' => '10',
            'sale_price' => '45',
            'active' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('gift_cards')->insert([
            'user_id' => '1',
            'retailer_id' => '2',
            'serial' => '123456789',
            'value' => '200',
            'discount' => '25',
            'sale_price' => '150',
            'active' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('gift_cards')->insert([
            'user_id' => '1',
            'retailer_id' => '3',
            'serial' => '123456789',
            'value' => '30',
            'discount' => '10',
            'sale_price' => '27',
            'active' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
