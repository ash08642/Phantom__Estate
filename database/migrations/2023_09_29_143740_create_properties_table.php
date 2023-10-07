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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('photo')->nullable();
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('plz');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('size');
            $table->bigInteger('price');
            $table->string('propertytype');
            $table->string('purchasetype');
            $table->longText('description');
            $table->string('agentfirstname');
            $table->string('agentlastname');
            $table->string('agentemail');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
