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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('grade',10)->nullable();
            $table->boolean('is_approved')->default(0);
            $table->string('project_name',100)->nullable();
            $table->unsignedBigInteger('instructor_id')->nullable();
            $table->foreign('instructor_id')->references('id')->on('teachers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
