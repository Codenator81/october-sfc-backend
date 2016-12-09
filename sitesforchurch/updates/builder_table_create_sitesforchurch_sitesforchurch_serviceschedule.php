<?php namespace Sitesforchurch\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSitesforchurchSitesforchurchServiceschedule extends Migration
{
    public function up()
    {
        Schema::create('sitesforchurch_sitesforchurch_serviceschedule', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('order')->nullable();
            $table->string('service_name')->nullable();
            $table->string('service_time')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sitesforchurch_sitesforchurch_serviceschedule');
    }
}
