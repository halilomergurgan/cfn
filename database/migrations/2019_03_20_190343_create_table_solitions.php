<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSolitions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title_tr');
            $table->text('title_eng');
            $table->longText('description_tr');
            $table->longText('description_en');
            $table->string('photo_path')->nullable();
            $table->unsignedBigInteger('menu_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('menus')->ondelete('cascade');
            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solitions');
    }
}
