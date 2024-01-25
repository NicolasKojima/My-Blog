<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('blogcontents', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->string('author');
        $table->string('image');
        $table->string('category'); // Add this line
        $table->unsignedInteger('rating')->nullable(); // Add this line
        $table->timestamps();
    });
}


};
