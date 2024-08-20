<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeitoTable extends Migration
{
    public function up()
    {
        Schema::create('leitos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_leito');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('leitos');
    }
}
