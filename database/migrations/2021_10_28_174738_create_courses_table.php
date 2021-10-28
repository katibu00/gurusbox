<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('views_count')->default(0);
            $table->string('draft')->nullable(0);
            $table->boolean('published')->default(0);
            $table->boolean('approved')->default(0);
            $table->boolean('trashed')->default(0);
            $table->integer('shares_count')->nullable(0);
            $table->integer('course_code');
            $table->dateTime('expiry_date');
            $table->dateTime('published_date');
            $table->string('duration');
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
        Schema::dropIfExists('courses');
    }
}
