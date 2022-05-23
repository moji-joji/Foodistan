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
            $table->string('city')->default('Islamabad');
            $table->bigInteger('views')->default(0);
            $table->unsignedBigInteger('no_of_ratings')->default(10);
            $table->float('avg_rating')->default(4.3);
            $table->string('website')->default('foodistan.test');
            $table->string('email')->default('restaurant@gmail.com');
            $table->string('facebook_url')->default('https://www.facebook.com/');
            $table->string('twitter_url')->default('https://twitter.com/?lang=en');
            $table->string('instagram_url')->default('https://www.instagram.com/');
            $table->unsignedBigInteger('no_of_likes')->default(5);
            $table->float('longitude')->default(73.0479);
            $table->float('latitude')->default(33.6844);
            $table->string('featured')->default('no');
            $table->string('location_slug')->default('https://www.google.com/maps/embed/v1/place?q=restaurant&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8');
            $table->string('main_image');
            $table->string('category')->default('restaurant');
            $table->string('image_1')->default('cronos-assets/images/restaurant-default1.jpg');
            $table->string('image_2')->default('cronos-assets/images/restaurant-default2.jpg');
            $table->string('image_3')->default('cronos-assets/images/restaurant-default3.jpg');

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
