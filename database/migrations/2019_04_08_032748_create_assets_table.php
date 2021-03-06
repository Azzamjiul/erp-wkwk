<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->bigIncrements('asset_id');
            $table->string('asset_name');
            $table->unsignedBigInteger('asset_cost');
            $table->integer('asset_duration');
            $table->string('asset_duration_type');
            $table->integer('asset_quantity');
            $table->integer('asset_quantity_type');
            $table->unsignedBigInteger('asset_salvation_value');
            $table->integer('asset_type');
            $table->integer('status')->nullable();
            $table->integer('company_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('assets');
    }
}
