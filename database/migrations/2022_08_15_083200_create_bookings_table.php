<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->foreignId('venue_id');
            $table->decimal('price');
            $table->date('date');
            $table->enum('status',['confirm', 'pending', 'cancel'])->default('pending');
            $table->enum('payment_method', ['cash', 'bkash', 'nagod', 'ssl', 'cheque']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
