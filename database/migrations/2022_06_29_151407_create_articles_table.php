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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('guide_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('article_title', 100)->constrained();
            $table->string('article_tags', 200)->constrained();
            $table->longText('article_description')->constrained();
            $table->string('article_image')->constrained();
            $table->longText('article_contents')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
