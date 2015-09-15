<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatetimeForTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('art_user', function ($table) {
            $table->timestamps();
        });
        Schema::table('art_teacher', function ($table) {
            $table->timestamps();
        });
        Schema::table('art_student', function ($table) {
            $table->timestamps();
        });
        Schema::table('art_course', function ($table) {
            $table->timestamps();
        });
        Schema::table('art_apply', function ($table) {
            $table->timestamps();
        });
        Schema::table('art_category', function ($table) {
            $table->timestamps();
        });
        Schema::table('art_collect', function ($table) {
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
        //
    }
}
