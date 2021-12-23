<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeste3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allColumn', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('id_teste');
            $table->bigInteger('votes');
            $table->binary('photo');
            $table->boolean('confirmed');
            $table->char('name', 100);
            $table->dateTimeTz('created_at', $precision = 0);
            $table->dateTime('created_at', $precision = 0);
            $table->decimal('amount', $precision = 8, $scale = 2);
            $table->double('amount', 8, 2);
            $table->enum('difficulty', ['easy', 'hard']);
            $table->float('amount', 8, 2);
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
        Schema::dropIfExists('flights');
    }
}
