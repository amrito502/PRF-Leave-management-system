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
        Schema::create('employee_file_uploads', function (Blueprint $table) {
            $table->id();
            $table->text('file_1')->nullable();
            $table->text('file_2')->nullable();
            $table->text('file_3')->nullable();
            $table->text('file_4')->nullable();
            $table->text('file_5')->nullable();
            $table->text('file_6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_file_uploads');
    }
};