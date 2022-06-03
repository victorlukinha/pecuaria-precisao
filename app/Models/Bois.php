<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bois extends Model
{
    use HasFactory;

    public function up()
    {
        Schema::create('boi', function (Blueprint $table) {
            $table->id();
            $table->string("numBrinco");
            $table->decimal("custo",19,2);
            $table->decimal("pesoInicial",19,2);
            $table->integer("dono");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('boi');
    }




}
