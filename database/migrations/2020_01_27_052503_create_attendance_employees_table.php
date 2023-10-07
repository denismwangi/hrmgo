<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_employees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('employee_id');
            $table->date('date');
            $table->string('status');
            $table->time('clock_in');
            $table->time('clock_out');
            $table->time('late');
            $table->time('early_leaving');
            $table->time('overtime');
            $table->time('total_rest');
            $table->string('created_by');
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
        Schema::dropIfExists('attendance_employees');
    }
}
