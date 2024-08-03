<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('or_no')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'customer', 'encode']);
            $table->date('bday')->nullable();
            $table->integer('age')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->enum('civil_status', ['Single', 'Married', 'Divorced', 'Widowed'])->nullable();
            $table->string('employment_type')->nullable();
            $table->string('occupation')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('bloodtype')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('spouse_name')->nullable();
            $table->date('spouse_bday')->nullable();
            $table->string('spouse_place_of_birth')->nullable();
            $table->integer('spouse_age')->nullable();
            $table->string('prim_beneficiary_name')->nullable();
            $table->date('prim_bday')->nullable();
            $table->integer('prim_age')->nullable();
            $table->string('prim_contact')->nullable();
            $table->string('sec_beneficiary_name')->nullable();
            $table->date('sec_bday')->nullable()->nullable();
            $table->integer('sec_age')->nullable()->nullable();
            $table->string('sec_contact')->nullable()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload')->nullable();
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
