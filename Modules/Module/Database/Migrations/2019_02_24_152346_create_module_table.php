<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->softDeletes();
        });

        Schema::create('module_has_roles', function (Blueprint $table){
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('module_id');

            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');

            $table->foreign('module_id')
                ->references('id')
                ->on('modules')
                ->onDelete('cascade');

            $table->primary(['role_id','module_id']);
        });

        Schema::create('module_has_permissions', function (Blueprint $table){
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('module_id');
            $table->unsignedInteger('permission_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('module_id')
                ->references('id')
                ->on('modules')
                ->onDelete('cascade');

            $table->foreign('permission_id')
                ->references('id')
                ->on('permissions')
                ->onDelete('cascade');

            $table->primary(['user_id','module_id','permission_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('module_has_permissions');
        Schema::drop('module_has_roles');
        Schema::drop('modules');
    }
}