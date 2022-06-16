<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('cars')->insert([
        //     'make' => Str::random(10),
        //     'model' => Str::random(10),
        //     'image' => Str::random(10),
        //     'produced_on' => Carbon::parse('12-2-2022'),
        // ]);
        Car::factory()->count(3)->create();
    }
}
