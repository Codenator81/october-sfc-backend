<?php namespace Sitesforchurch\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSitesforchurchSitesforchurchPhotos extends Migration
{
    public function up()
    {
        Schema::create('sitesforchurch_sitesforchurch_photos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->boolean('published')->nullable();
            $table->string('gallery')->nullable();
            $table->string('event')->nullable();
            $table->string('ministry')->nullable();
            $table->dateTime('date_added')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sitesforchurch_sitesforchurch_photos');
    }
}
