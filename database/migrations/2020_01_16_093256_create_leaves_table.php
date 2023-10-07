<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('employee_id');
            $table->string('leave_type_id');
            $table->date('applied_on');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('total_leave_days');
            $table->string('leave_reason');
            $table->string('remark')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('leaves');
    }
}
