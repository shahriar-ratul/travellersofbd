<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_trips', function (Blueprint $table) {
            $table->increments('trip_id');
            $table->integer('user_id');
            $table->string('trip_title',500)->nullable();
            $table->string('budget',255)->nullable();
            $table->string('find_gender',255)->nullable();
            $table->string('member_list',255)->nullable();
            $table->string('first_time_visit',255)->nullable();
            $table->string('image1',500)->nullable();
            $table->string('image2',500)->nullable();
            $table->string('image3',500)->nullable();
            $table->string('image4',500)->nullable();
            $table->string('room_sharing',255)->nullable();
            $table->string('short_description',1000)->nullable();
            $table->string('Itinerary',255)->nullable();
            $table->string('work_and_travel',255)->nullable();
            $table->string('place_want_to_see',500)->nullable();
            $table->string('type_of_journey',255)->nullable();
            $table->string('destination',500)->nullable();
            $table->string('accomodation',255)->nullable();
            $table->string('things_want_to_do',500)->nullable();
            $table->string('meeting_before_trip',255)->nullable();
            $table->string('getting_around',255)->nullable();
            $table->string('contact_no',255)->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->string('how_many_days')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('post_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('create_trips');
    }
}
