<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\ProcurementFactory;
use App\Models\Procurement;

class ProcurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Procurement::Factory()->count(20)->create(); // Membuat 20 data pengadaan dengan menggunakan factory
    }
}
