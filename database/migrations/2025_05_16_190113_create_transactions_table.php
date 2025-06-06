<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->enum('movement', ['Charge', 'Payment']);
            $table->enum('currency', ['USD', 'PESO'])->default('USD');
            $table->decimal('amount', 15, 2)->default(0);
            $table->foreignId('guest_id')->constrained('guests')->onDelete('cascade')->nullable();
            $table->string('details')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
