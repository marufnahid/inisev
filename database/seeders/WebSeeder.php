<?php

namespace Database\Seeders;

use App\Models\Web;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Web::create(['name' => 'Inisev']);
        Web::create(['name' => 'Google']);
        Web::create(['name' => 'Youtube']);
    }



}
