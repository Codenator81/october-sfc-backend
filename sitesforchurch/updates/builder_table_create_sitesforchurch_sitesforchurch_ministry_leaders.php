<?php namespace Sitesforchurch\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSitesforchurchSitesforchurchMinistryLeaders extends Migration
{
    public function up()
    {
        Schema::create('sitesforchurch_sitesforchurch_ministry_leaders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('bio')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('ministries')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sitesforchurch_sitesforchurch_ministry_leaders');
    }
}
