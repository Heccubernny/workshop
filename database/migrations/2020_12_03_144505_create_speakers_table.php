<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speakers', function (Blueprint  $table) {
            $table->id();
            $table->string("speaker_name");
            $table->text('speaker_image');
            $table->string('job_title');
            $table->text('speaker_description');
            $table->string('facebook_link')->unique();
            $table->string('twitter_link')->unique();
            $table->string('github_link')->unique();
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
        Schema::dropIfExists('speakers');
    }
}
