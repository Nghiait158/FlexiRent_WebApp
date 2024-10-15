<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyImgsTable extends Migration
{
    public function up()
    {
        Schema::create('property_imgs', function (Blueprint $table) {
            $table->id('propertyImg_id'); // Primary key
            $table->string('propertyImg_name'); // Name of the image
            // Adjusting foreign key reference based on your properties table
            $table->foreignId('property_id')->constrained('properties', 'property_id')->onDelete('cascade'); // Foreign key referencing properties
            $table->string('path'); // Path to the image
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_imgs'); // Drop the property_imgs table if migration is rolled back
    }
}


