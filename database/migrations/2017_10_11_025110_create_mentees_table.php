<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentees', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('name');
            $table->string('email')->unique();
            $table->text('password');
            $table->text('department');
            $table->text('hall');
            $table->text('roll');
            $table->text('q1');
            $table->text('q2');
            $table->text('pref1');
            $table->text('pref2');
            $table->text('pref3');
            $table->text('phone');
            $table->text('cgpa');
            $table->text('current');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentees');
    }
}
