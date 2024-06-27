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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id', 12)->unique();
            $table->string('name')->nullable();
            $table->text('username')->nullable();
            $table->string('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('alternate_phone')->nullable();
            $table->text('address')->nullable();
            $table->date('dob')->nullable();
            // $table->integer('department_id')->nullable();
            $table->unsignedBigInteger('department_id');
            $table->integer('designation_id')->nullable();
            $table->date('joining_date')->nullable();
            $table->date('resign_date')->nullable();
            $table->text('job_location')->nullable();
            $table->integer('role_id')->nullable();
            $table->integer('employee_file_uploads_id')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->text('image')->nullable();
            $table->foreign('department_id')->references('id')->on('departments')
            ->restrictOnDelete()
            ->restrictOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');

  }
};