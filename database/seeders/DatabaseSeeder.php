<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\Buyer;
use App\Models\Event;
use App\Models\TicketBuyer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Event::factory(40)->create();
        Buyer::factory(30)->create();
        TicketBuyer::factory(20)->create();
    }
}
