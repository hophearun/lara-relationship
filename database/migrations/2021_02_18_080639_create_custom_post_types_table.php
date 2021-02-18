<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomPostTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_post_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('title');
            $table->json('description')->nullable();
            $table->json('extras_fields')->nullable();
            $table->json('custom_fields')->nullable();
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
        Schema::dropIfExists('custom_post_types');
    }
}
