<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'trainers', function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('branch');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('contact');
            $table->string('email');
            $table->text('address')->nullable();
            $table->text('expertise')->nullable();
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
        Schema::dropIfExists('trainers');
    }
}
