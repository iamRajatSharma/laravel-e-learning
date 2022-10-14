<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string("name");
            $table->string("category");
            $table->string("price", 10);
            $table->string("dis_price", 10);
            $table->string("lecture", 10);
            $table->string("quiz", 10);
            $table->string("level");
            $table->string("language");
            $table->string("image");
            $table->string("about");
            $table->string("description");
            $table->string("student_learn");
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
};
