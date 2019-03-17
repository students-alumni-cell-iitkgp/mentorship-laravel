<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMentorAllottedToMentees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('mentees', function (Blueprint $table) {
            
            $table->integer('mentor_allotted')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('mentees', function($table) {
            $table->dropColumn('mentor_allotted');
        });
    }
}
