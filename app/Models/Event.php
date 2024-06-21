<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TicketBuyer;

class Event extends Model
{
    protected $table = 'events';

    use HasFactory;

    public function ticket_buyers() {
        return $this->hasMany(TicketBuyer::class);
    }
}
