<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateHomePageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('homepage',function(Blueprint $table){
            $table->increments("id");
            $table->string("slider_background")->nullable();
            $table->text("slider_title")->nullable();
            $table->text("slider_text")->nullable();
            $table->text("main_section")->nullable();
            $table->text("secondary_section")->nullable();
            $table->string("facebook_link")->nullable();
            $table->string("twitter_link")->nullable();
            $table->string("linkedin_link")->nullable();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->text("google_search")->nullable();
            $table->text("bing_search")->nullable();
            $table->text("error_404_title")->nullable();
            $table->text("error_404_text")->nullable();
            $table->text("terms_text")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('homepage');
    }

}
