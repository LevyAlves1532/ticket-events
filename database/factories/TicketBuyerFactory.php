<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Buyer;
use App\Models\Event;
use App\Models\TicketBuyer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TicketBuyer>
 */
class TicketBuyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $event = Event::all()->random();
        $buyer = Buyer::all()->random();

        $number_ticket = rand(0, $event->qtd_tickets);

        // do {
        //     $
        // } while();

        return [
            'number_ticket' => $number_ticket,
            'event_id' => $event,
            'buyer_id' => $buyer,
        ];
    }
}
