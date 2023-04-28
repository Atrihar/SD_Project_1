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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->string('name',100);
            $table->text('ques')->nullable();
            $table->string('attachment')->nullable();
            $table->string('ansr')->nullable();
            $table->string('ans')->nullable();
            $table->date('due')->nullable();
            $table->date('submission')->nullable();
            $table->boolean('status')->default(0);
            $table->string('grade',10)->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
