<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'expenses', function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('account_id');
            $table->integer('amount');
            $table->date('date');
            $table->string('expense_category_id');
            $table->string('payee_id');
            $table->integer('payment_type_id');
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
        Schema::dropIfExists('expenses');
    }
}
