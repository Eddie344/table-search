<?php

use Flynsarmy\CsvSeeder\CsvSeeder;
//use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'houses';
        $this->csv_delimiter = ',';
        $this->filename = base_path().'/database/seeds/csvs/houses.csv';
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        DB::table($this->table)->truncate();
        parent::run();
    }
}

//Usual seeder bellow

//class HouseSeeder extends Seeder
//{
//    /**
//     * Run the database seeds.
//     *
//     * @return void
//     */
//    public function run()
//    {
//        DB::table('houses')->insert([
//            [ 'name' => 'The Victoria', 'price' => 374662, 'bedrooms' => 4, 'bathrooms' => 2, 'storeys' => 2, 'garages' => 2 ],
//            [ 'name' => 'The Xavier', 'price' => 513268, 'bedrooms' => 4, 'bathrooms' => 2, 'storeys' => 1, 'garages' => 2 ],
//            [ 'name' => 'The Como', 'price' => 454990, 'bedrooms' => 4, 'bathrooms' => 3, 'storeys' => 2, 'garages' => 3 ],
//            [ 'name' => 'The Aspen', 'price' => 384356, 'bedrooms' => 4, 'bathrooms' => 2, 'storeys' => 2, 'garages' => 2 ],
//            [ 'name' => 'The Lucretia', 'price' => 572002, 'bedrooms' => 4, 'bathrooms' => 3, 'storeys' => 2, 'garages' => 2 ],
//            [ 'name' => 'The Toorak', 'price' => 521951, 'bedrooms' => 5, 'bathrooms' => 2, 'storeys' => 1, 'garages' => 2 ],
//            [ 'name' => 'The Skyscape', 'price' => 263604, 'bedrooms' => 3, 'bathrooms' => 2, 'storeys' => 2, 'garages' => 2 ],
//            [ 'name' => 'The Clifton', 'price' => 386103, 'bedrooms' => 3, 'bathrooms' => 2, 'storeys' => 1, 'garages' => 1 ],
//            [ 'name' => 'The Geneva', 'price' => 390600, 'bedrooms' => 4, 'bathrooms' => 3, 'storeys' => 2, 'garages' => 2 ],
//        ]);
//    }
//}