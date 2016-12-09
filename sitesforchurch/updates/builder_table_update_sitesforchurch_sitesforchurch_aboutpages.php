<?php namespace Sitesforchurch\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSitesforchurchSitesforchurchAboutpages extends Migration
{
    public function up()
    {
        Schema::table('sitesforchurch_sitesforchurch_aboutpages', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sitesforchurch_sitesforchurch_aboutpages', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
