<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('name');
            $table->string('email')->unique();
            $table->text('password');
            $table->text('department');
            $table->text('pout');
            $table->text('foe');
            $table->text('ccity');
            $table->integer('mentee');
            $table->text('pref1');
            $table->text('pref2');
            $table->text('pref3');
            $table->text('phone');
            $table->text('fb');
            $table->text('linkedin');
            $table->text('firm');
            $table->text('desg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentors');
    }
}
