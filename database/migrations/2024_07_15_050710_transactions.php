<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // This line is enough to define the foreign key
            $table->string('or_no'); // Corrected 'str' to 'string'
            $table->string('account_name');
            $table->string('plan_type');
            $table->decimal('contract_price', 10, 2);
            $table->decimal('balance', 10, 2);
            $table->date('effectivity_date');
            $table->date('expiration_date');
            $table->decimal('quota_comm',10, 2)->nullable();
            $table->decimal('installment', 10, 2)->nullable();
            $table->string('status');
            $table->string('mode_of_payment');
            $table->string('account_type');
            $table->timestamps();
            
            // Remove the following line
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }        

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
