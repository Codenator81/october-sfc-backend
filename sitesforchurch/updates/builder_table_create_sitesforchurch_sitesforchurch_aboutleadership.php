<?php namespace Sitesforchurch\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSitesforchurchSitesforchurchAboutleadership extends Migration
{
    public function up()
    {
        Schema::create('sitesforchurch_sitesforchurch_aboutleadership', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('leader_name')->nullable();
            $table->string('position')->nullable();
            $table->text('body_content')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('is_senior_pastor')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sitesforchurch_sitesforchurch_aboutleadership');
    }
}
