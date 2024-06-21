<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TicketBuyer;

class Buyer extends Model
{
    protected $table = 'buyers';

    use HasFactory;

    public function ticket_buyers() {
        return $this->hasMany(TicketBuyer::class);
    }
}
