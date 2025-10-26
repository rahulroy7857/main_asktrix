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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('country_code')->nullable();
            $table->text('query');
            $table->string('service_type')->nullable(); 
            $table->enum('status', ['active', 'pending', 'inactive', 'completed'])->default('active');
            $table->timestamps();
            
            // Add indexes for better performance
            $table->index(['email', 'service_type']);
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};