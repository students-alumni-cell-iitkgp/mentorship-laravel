<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveIdsFromMentors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mentors', function($table) {
             $table->dropColumn('fb');
             $table->dropColumn('linkedin');
             $table->dropColumn('ccity');


          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mentors', function($table) {
            $table->text('fb');
            $table->text('linkedin');
            $table->text('ccity');

          });
    }
}
