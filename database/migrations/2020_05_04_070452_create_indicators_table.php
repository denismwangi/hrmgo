<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'indicators', function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('branch')->default(0);
            $table->string('department')->default(0);
            $table->string('designation')->default(0);
            $table->string('customer_experience')->default(0);
            $table->string('marketing')->default(0);
            $table->string('administration')->default(0);
            $table->string('professionalism')->default(0);
            $table->string('integrity')->default(0);
            $table->string('attendance')->default(0);
            $table->string('created_user')->default(0);
            $table->string('created_by')->default(0);
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
        Schema::dropIfExists('indicators');
    }
}
