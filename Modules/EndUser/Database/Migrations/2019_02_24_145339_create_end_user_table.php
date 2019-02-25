<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('end_user', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('user_id');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('position');
            $table->unsignedInteger('age');
            $table->enum('sex',['male','female','other']);
            $table->text('address')->nullable();
            $table->string('primary_contact',20)->unique();
            $table->string('secondary_contact',20)->nullable();
            $table->string('whatsapp_contact',20)->nullable();
            $table->unsignedInteger('curriculum_vitae')->nullable();
            $table->unsignedInteger('photo')->nullable();
            
            $table->foreign('curriculum_vitae')->references('id')->on('media')->onDelete('cascade');
            $table->foreign('photo')->references('id')->on('media')->onDelete('cascade');

            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('end_user');
    }
}
