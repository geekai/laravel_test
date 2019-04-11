<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "Apple iPhone",
            'type' => "Cellphone",
            'price' => "998.00",
            'barcode' => Str::random(10)
        ]);
        DB::table('products')->insert([
            'name' => "SAMSUNG S10",
            'type' => "Cellphone",
            'price' => "890.00",
            'barcode' => Str::random(10)
        ]);
        DB::table('products')->insert([
            'name' => "HUAWEI P20",
            'type' => "Cellphone",
            'price' => "798.00",
            'barcode' => Str::random(10)
        ]);
        DB::table('products')->insert([
            'name' => "XIAOMI MI7",
            'type' => "Cellphone",
            'price' => "498.00",
            'barcode' => Str::random(10)
        ]);
        DB::table('products')->insert([
            'name' => "Vivo Portable",
            'type' => "Cellphone",
            'price' => "500.00",
            'barcode' => Str::random(10)
        ]);
        DB::table('products')->insert([
            'name' => "1PLUS Portable",
            'type' => "Cellphone",
            'price' => "398.00",
            'barcode' => Str::random(10)
        ]);
        DB::table('products')->insert([
            'name' => "Lenovo Portable",
            'type' => "Cellphone",
            'price' => "450.00",
            'barcode' => Str::random(10)
        ]);
        DB::table('products')->insert([
            'name' => "Mobile Application",
            'type' => "Application",
            'price' => "2000",
            'barcode' => Str::random(10)
        ]);
    }
}
