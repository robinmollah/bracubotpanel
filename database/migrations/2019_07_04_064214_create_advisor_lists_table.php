<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvisorListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisor_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id');
            $table->integer('teacher_id');
            $table->dateTime('date_time');
            $table->timestamps();
//            //Foreign Keys
                        $table->foreign('student_id')
                            ->references('student_id')
                            ->on('students')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');

                            $table->foreign('teacher_id')
                           ->references('teacher_id')
                            ->on('teachers')
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
        Schema::dropIfExists('advisor_lists');
    }
}
