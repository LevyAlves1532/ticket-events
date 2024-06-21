<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Buyer;
use App\Models\Event;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ticket_buyers', function (Blueprint $table) {
            $table->id();
            $table->integer('number_ticket');
            $table->foreignIdFor(Event::class)->references('id')->on('events')->onDelete('CASCADE');
            $table->foreignIdFor(Buyer::class)->references('id')->on('buyers')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ticket_buyers', function (Blueprint $table) {
            $table->dropForeignIdFor(Event::class);
            $table->dropForeignIdFor(Buyer::class);
        });

        Schema::dropIfExists('ticket_buyers');
    }
};
