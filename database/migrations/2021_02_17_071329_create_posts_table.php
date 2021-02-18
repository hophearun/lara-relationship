<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('custom_post_type_id');
            $table->string('title')->nullable();
            $table->json('content')->nullable();
            $table->json('excerpt')->nullable();
            $table->json('trans_fileds')->nullable();
            $table->json('extras_fields')->nullable();
            $table->json('media')->nullable();
            $table->json('seo_meta')->nullable();
            $table->string('featured_image')->nullable();
            $table->boolean('featured');
            $table->string('password')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->bigInteger('post_ordering')->nullable();
            $table->dateTime('post_created_at', 0);
            $table->dateTime('post_expire_at', 0)->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
