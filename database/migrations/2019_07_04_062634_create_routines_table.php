<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->bigIncrements('routine_id');
            $table->integer('section_id');
            $table->integer('semester_id');
            $table->timestamps();

//            //Foreign Keys
                        $table->foreign('section_id')
                            ->references('section_id')
                            ->on('course_sections')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');

                            $table->foreign('semester_id')
                            ->references('id')
                            ->on('semesters')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routines');
    }
}
