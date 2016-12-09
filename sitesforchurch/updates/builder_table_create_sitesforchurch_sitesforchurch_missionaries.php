<?php namespace Sitesforchurch\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSitesforchurchSitesforchurchMissionaries extends Migration
{
    public function up()
    {
        Schema::create('sitesforchurch_sitesforchurch_missionaries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('field')->nullable();
            $table->string('continent')->nullable();
            $table->string('photo')->nullable();
            $table->string('prayer_letters')->nullable();
            $table->text('body_content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sitesforchurch_sitesforchurch_missionaries');
    }
}
