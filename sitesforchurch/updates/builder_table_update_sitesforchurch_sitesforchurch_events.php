<?php namespace Sitesforchurch\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSitesforchurchSitesforchurchEvents extends Migration
{
    public function up()
    {
        Schema::table('sitesforchurch_sitesforchurch_events', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sitesforchurch_sitesforchurch_events', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
