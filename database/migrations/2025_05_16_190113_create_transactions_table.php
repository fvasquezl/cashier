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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->enum('movement', ['Charge', 'Payment']);
            $table->enum('currency', ['USD', 'PESO'])->default('USD');
            $table->decimal('amount', 15, 2)->default(0);
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade')->nullable();
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
