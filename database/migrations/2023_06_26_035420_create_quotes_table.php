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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('product_id');
            $table->string('name');
            $table->string('status');
            $table->string('email');
            $table->string('phone');
            $table->string('institution');
            $table->string('position');
            $table->string('country');
            $table->string('region');
            $table->string('description');
            $table->string('creator_id');
            $table->tinyInteger('updator_id');
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('quotes');
    }
};
