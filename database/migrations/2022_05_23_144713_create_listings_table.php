<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');

            $table->timestamps();
            $table->string('title');
            $table->longText('description');
            $table->longText('content');
            $table->string('address');
            $table->string('city');
            $table->bigInteger('views')->default(0);
            $table->unsignedBigInteger('no_of_ratings')->default(0);
            $table->float('avg_rating')->default(0);
            $table->string('website')->default('foodistan.test');
            $table->string('email')->default('restaurant@gmail.com');
            $table->string('facebook_url')->default('https://www.facebook.com/');
            $table->string('twitter_url')->default('https://twitter.com/?lang=en');
            $table->string('instagram_url')->default('https://www.instagram.com/');
            $table->unsignedBigInteger('no_of_likes')->default(0);
            $table->float('longitude')->default(73.0479);
            $table->float('latitude')->default(33.6844);
            $table->string('location_slug')->default('https://www.google.com/maps/embed/v1/place?q=restaurant&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8');
            $table->string('main_image')->default('cronos-assets/images/restaurant-default.jpg');
            $table->string('category')->default('restaurant');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->string('phone_number')->default('+92-333-7389131');
            $table->string('open_hours')->default('10:00 AM - 10:00 PM');
            $table->integer('price_approx')->default(750);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
};
