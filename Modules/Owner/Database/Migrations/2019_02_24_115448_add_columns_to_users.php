<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->after('email')->nullable();
            $table->string('provider')->after('remember_token')->nullable()->comments('Stores provider for social login like Facebook , Google etc.');
            $table->string('provider_id')->after('provider')->nullable()->comments('Stores provider token for social login like Facebook , Google etc. after login');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('provider');
            $table->dropColumn('provider_id');
        });
    }
}
