<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('foto');
            $table->string('quantity');
            $table->string('price');
            $table->string('category');
            $table->string('numero');

            $table->foreignIdFor(\App\Models\Gender::class);
            $table->foreignIdFor(\App\Models\Modelo::class);

            $table->timestamps();
            $table->softDeletesTz($column = 'deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoes');
    }
}
