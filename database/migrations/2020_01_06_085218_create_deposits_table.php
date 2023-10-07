<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'deposits', function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('account_id');
            $table->string('amount');
            $table->date('date');
            $table->string('income_category_id');
            $table->string('payer_id');
            $table->string('payment_type_id');
            $table->string('referal_id')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('deposits');
    }
}
