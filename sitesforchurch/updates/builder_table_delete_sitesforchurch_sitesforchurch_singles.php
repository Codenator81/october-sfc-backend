<?php namespace Sitesforchurch\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSitesforchurchSitesforchurchSingles extends Migration
{
    public function up()
    {
        Schema::dropIfExists('sitesforchurch_sitesforchurch_singles');
    }
    
    public function down()
    {
        Schema::create('sitesforchurch_sitesforchurch_singles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('gospel_heading', 255)->nullable();
            $table->string('gospel_featured_image', 255)->nullable();
            $table->text('gospel_content')->nullable();
            $table->string('welcome_heading', 255)->nullable();
            $table->string('welcome_featured_image', 255)->nullable();
            $table->string('church_name', 255)->nullable();
            $table->string('church_tagline', 255)->nullable();
            $table->string('church_logo', 255)->nullable();
            $table->string('church_logo_dark', 255)->nullable();
            $table->string('home_intro_heading', 255)->nullable();
            $table->text('home_intro_text')->nullable();
            $table->string('home_main_image', 255)->nullable();
            $table->string('home_link1_image', 255)->nullable();
            $table->string('home_link1_text', 255)->nullable();
            $table->string('home_link1_url', 255)->nullable();
            $table->string('home_link2_image', 255)->nullable();
            $table->string('home_link2_text', 255)->nullable();
            $table->string('home_link2_url', 255)->nullable();
            $table->string('home_link3_image', 255)->nullable();
            $table->string('home_link3_text', 255)->nullable();
            $table->string('home_link3_url', 255)->nullable();
            $table->text('home_link1_description')->nullable();
            $table->text('home_link2_description')->nullable();
            $table->text('home_link3_description')->nullable();
            $table->string('church_phone', 255)->nullable();
            $table->string('church_email', 255)->nullable();
            $table->string('church_facebook', 255)->nullable();
            $table->string('church_twitter', 255)->nullable();
            $table->string('church_youtube', 255)->nullable();
            $table->string('church_street', 255)->nullable();
            $table->string('church_street2', 255)->nullable();
            $table->string('church_city', 255)->nullable();
            $table->string('church_state', 255)->nullable();
            $table->string('church_zip', 255)->nullable();
            $table->text('church_google_maps_embed')->nullable();
            $table->string('contact_heading', 255)->nullable();
            $table->text('contact_content')->nullable();
        });
    }
}
