<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'transfer_balances', function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('from_account_id');
            $table->string('to_account_id');
            $table->date('date');
            $table->integer('amount');
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
        Schema::dropIfExists('transfer_balances');
    }
}
