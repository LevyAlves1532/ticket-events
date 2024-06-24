<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Buyer;
use App\Models\Event;

class TicketBuyer extends Model
{
    protected $table = 'ticket_buyers';

    protected $fillable = [
        'code',
        'event_id',
        'buyer_id',
    ];

    use HasFactory;

    public function event() {
        return $this->belongsTo(Event::class);
    }

    public function buyer() {
        return $this->belongsTo(Buyer::class);
    }
}
