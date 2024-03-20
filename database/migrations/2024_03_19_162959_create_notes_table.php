<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id()->primary();
            $table->longText("note");
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};