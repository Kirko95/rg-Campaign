<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('campaign_id');
            $table->unsignedBigInteger('inventory_id');
            $table->enum('type', ['opening', 'sales', 'giveaway', 'closing', 'refil']);
            $table->integer('quantity');
            $table->string('remarks')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('campaign_id')->references('id')->on('campaigns');
            $table->foreign('inventory_id')->references('id')->on('inventories');
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
        Schema::dropIfExists('stocks');
    }
}
