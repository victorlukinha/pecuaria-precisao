<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bois', function (Blueprint $table) {
            $table->id();
            $table->string("numBrinco");
            $table->decimal("custo",19,2);
            $table->decimal("pesoInicial",19,2);
            $table->integer("dono");
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
        Schema::dropIfExists('bois');
    }
}
