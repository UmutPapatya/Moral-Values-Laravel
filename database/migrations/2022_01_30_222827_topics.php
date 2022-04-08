<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Topics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id('topics_id');
            $table->unsignedBigInteger('tcategory_id'); 
            $table->string('topics_name');
            $table->string('image');
            $table->string('slug');
            $table->string('topics_desc');
            $table->string('video_url');
            $table->string('video_moral');
            $table->string('story_desc');
            $table->string('story_moral');
            $table->timestamps();

            $table->foreign('tcategory_id')
                  ->references('category_id')
                  ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
