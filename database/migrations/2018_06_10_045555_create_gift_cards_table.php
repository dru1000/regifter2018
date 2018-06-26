<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiftCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('retailer_id');
            $table->string('serial', 100);
            $table->string('pin', 100)->nullable();
            $table->decimal('value', 8, 2);
            $table->integer('discount');
            $table->decimal('sale_price', 8, 2);
            $table->date('expiry_date')->nullable();
            $table->boolean('active')->default(false); //Has the card been approved for sale?
            $table->boolean('sold')->default(false); //Has the card been sold?
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
        Schema::dropIfExists('gift_cards');
    }
}
