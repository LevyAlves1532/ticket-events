<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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

        while ($event->ticket_buyers->where('buyer_id', '=', $buyer->id)->count() > 0) {
            $buyer = Buyer::all()->random();
        }

        $code = '#' . Str::random(10);

        while ($event->ticket_buyers->where('code', '=', $code)->count() > 0) {
            $code = '#' . Str::random(10);
        }

        return [
            'code' => $code,
            'event_id' => $event,
            'buyer_id' => $buyer,
        ];
    }
}
