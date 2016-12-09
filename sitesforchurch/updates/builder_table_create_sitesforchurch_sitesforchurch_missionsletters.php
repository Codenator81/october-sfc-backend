<?php namespace Sitesforchurch\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSitesforchurchSitesforchurchMissionsletters extends Migration
{
    public function up()
    {
        Schema::create('sitesforchurch_sitesforchurch_missionsletters', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('date')->nullable();
            $table->string('missionary')->nullable();
            $table->string('download')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sitesforchurch_sitesforchurch_missionsletters');
    }
}
