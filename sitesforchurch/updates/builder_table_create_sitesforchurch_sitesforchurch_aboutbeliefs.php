<?php namespace Sitesforchurch\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSitesforchurchSitesforchurchAboutbeliefs extends Migration
{
    public function up()
    {
        Schema::create('sitesforchurch_sitesforchurch_aboutbeliefs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('icon')->nullable();
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sitesforchurch_sitesforchurch_aboutbeliefs');
    }
}
