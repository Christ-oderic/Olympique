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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('key_posts_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('firstName');
            $table->string('lastName');
            $table->date('dateOfBirth');
            $table->string('placeOfBirth');
            $table->string('age');
            $table->string('height');
            $table->string('nationality');
            $table->date('dateOfJoin');
            $table->date('endContract');
            $table->string('posts');
            $table->string('shirtNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
