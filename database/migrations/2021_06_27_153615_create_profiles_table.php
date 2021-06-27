<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("user_id");
            $table->string("title")->nullable();
            $table->text("description")->nullable();
            $table->string("url")->nullable();
            $table->timestamps();
            $table->foreign("user_id")
                ->references("id")
                ->on("profiles")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
