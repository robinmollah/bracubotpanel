<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_routines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id');
            $table->string('course_code');
            $table->string('room_number');
            $table->date('date');
            $table->integer('semester_id');
            $table->timestamps();

            //Foreign Keys
               $table->foreign('student_id')
                    ->references('student_id')
                    ->on('students')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
//
//            //Foreign Keys
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
        Schema::dropIfExists('exam_routines');
    }
}
