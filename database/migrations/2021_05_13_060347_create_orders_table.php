<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_name')->nullable();
            $table->string('order_payment_type')->nullable();
            $table->string('order_email')->nullable();
            $table->string('order_phone')->nullable();
            $table->string('order_zipcode')->nullable();
            $table->string('stripe_order_id')->nullable();
            $table->string('order_province')->nullable();
            $table->string('order_city')->nullable();
            $table->string('order_address')->nullable();
            $table->string('total')->nullable();
            $table->string('status')->nullable()->default(0);
            $table->string('return_order')->nullable()->default(0);
            $table->string('month')->nullable();
            $table->string('date')->nullable();
            $table->string('year')->nullable();
            $table->string('status_code')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
