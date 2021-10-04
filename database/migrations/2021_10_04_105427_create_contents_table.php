<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable();

            $table->string('main_title_header')->nullable();
            $table->string('secondary_title_header')->nullable();
            $table->string('main_image')->nullable();
            $table->string('status')->default('A');
            $table->string('content_body_text', 2000)->nullable();
            
            $table->string('add_youtube_link')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
