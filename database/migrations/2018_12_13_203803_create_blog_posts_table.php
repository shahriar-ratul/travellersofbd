<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('blog_id');
            $table->integer('user_id');
            $table->string('blog_title',255)->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('blog_image_1',255)->nullable();
            $table->string('blog_image_2',255)->nullable();
            $table->integer('tag_id')->nullable();
            $table->integer('comment_count')->nullable();
            $table->integer('like_count')->nullable();
            $table->integer('dislike_count')->nullable();
            $table->integer('viewers_count')->nullable();
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
        Schema::dropIfExists('blog_posts');
    }
}
