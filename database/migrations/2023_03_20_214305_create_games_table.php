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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string("article_id",25);
            $table->string("name",80);
            $table->integer("price");
            $table->integer("age_min");
            $table->integer("age_max")->nullable();
            $table->integer("players_min")->nullable();
            $table->integer("players_max")->nullable();
            $table->string("language",20);
            $table->foreignId("publisher_id")->references("id")->on("publishers");
            $table->integer("qty")->default(0);
            $table->integer("profit_margin")->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game');
    }
};
