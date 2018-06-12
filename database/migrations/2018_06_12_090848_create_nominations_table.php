<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('business_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('bio')->nullable();
            $table->string('reason_for_nomination')->nullable();
            $table->integer('category_id');
            $table->integer('is_admin_selected')-> default(0);
            $table->integer('is_won')-> default(0);
            $table->boolean('no_of_nominations');
            $table->integer('user_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nominations');
    }
}
