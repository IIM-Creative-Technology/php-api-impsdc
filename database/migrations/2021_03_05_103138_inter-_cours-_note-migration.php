<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InterCoursNoteMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervenants', function (Blueprint $table) {
            $table->id();
            $table->char('name', 255);
            $table->char('lastname', 255);
            $table->integer('year_in');
            $table->timestamps();
        });

        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->char('name', 255);
            $table->date('start');
            $table->date('end');
            $table->timestamps();
            $table->unsignedBigInteger('intervenant_id')->index();
            $table->unsignedBigInteger('promo_id')->index();
        });

        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->integer('note');
            $table->timestamps();
            $table->unsignedBigInteger('cours_id')->index();
            $table->unsignedBigInteger('student_id')->index();
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
