<?php namespace Sitesforchurch\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSitesforchurchSitesforchurchSermons extends Migration
{
    public function up()
    {
        Schema::table('sitesforchurch_sitesforchurch_sermons', function($table)
        {
            $table->boolean('published')->nullable();
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('sitesforchurch_sitesforchurch_sermons', function($table)
        {
            $table->dropColumn('published');
            $table->increments('id')->unsigned()->change();
        });
    }
}
