<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChirpsTable extends Migration
{
    public function up()
    {
        Schema::create('chirps', function (Blueprint $table) {
            $table->id(); // Colonne ID
            $table->unsignedBigInteger('user_id'); // Colonne user_id
            $table->string('message'); // Message
            $table->timestamps(); // created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('chirps');
    }
};
