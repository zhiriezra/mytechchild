<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('booking_id');
            $table->string('email');
            $table->string('reference');
            $table->string('stripe_source')->nullable();
            $table->string('stripe_session')->nullable();
            $table->enum('gateway', ['paystack', 'stripe']);
            $table->decimal('amount', 9,2)->default(0);
            $table->enum('status', ['pending', 'cancelled', 'completed'])->default('pending');
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
        Schema::dropIfExists('payments');
    }
};
