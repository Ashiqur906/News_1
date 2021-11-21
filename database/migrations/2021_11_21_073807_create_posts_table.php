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
            
            $table->id('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('potraitimage')->nullable();
            $table->string('landscapeimage')->nullable();
            $table->longText('post_type')->nullable();
            $table->string('ratings')->nullable();
            $table->date('release_date')->nullable();
            $table->date('related_post')->nullable();
            $table->string('link')->nullable();

            
            $table->string('website')->nullable();
            $table->string('company')->nullable();
            $table->string('run_time')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();

            $table->string('news_location')->nullable();
            $table->string('country_origin')->nullable();
            $table->string('language')->nullable();

            $table->string('remarks')->nullable();
            $table->integer('sort_by')->nullable();
            $table->enum('is_active', ['Yes', 'No'])->default('Yes');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('modified_by')->references('id')->on('users');
            $table->foreign('parent_id')->references('id')->on('post')->onDelete('cascade');
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

