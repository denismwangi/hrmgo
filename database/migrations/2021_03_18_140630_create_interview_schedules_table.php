<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'interview_schedules', function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('candidate');
            $table->string('employee')->default(0);
            $table->date('date');
            $table->time('time');
            $table->text('comment')->nullable();
            $table->string('employee_response')->nullable();
            $table->string('created_by');
            $table->timestamps();
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interview_schedules');
    }
}
