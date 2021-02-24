<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('area')->nullable();
            $table->string('cost')->nullable();
            $table->string('status')->nullable();
            $table->date('start_date')->nullable();
            $table->date('finish_date')->nullable();
            $table->tinyInteger('is_featured')->default('0');
            $table->tinyInteger('is_published')->default('0');
            $table->string('featured_image')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
