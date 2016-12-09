<?php namespace Sitesforchurch\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSitesforchurchSitesforchurchServiceschedule extends Migration
{
    public function up()
    {
        Schema::dropIfExists('sitesforchurch_sitesforchurch_serviceschedule');
    }
    
    public function down()
    {
        Schema::create('sitesforchurch_sitesforchurch_serviceschedule', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('order')->nullable();
            $table->string('service_name', 255)->nullable();
            $table->string('service_time', 255)->nullable();
        });
    }
}
