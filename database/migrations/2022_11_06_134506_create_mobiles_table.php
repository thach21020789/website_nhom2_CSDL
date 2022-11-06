<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiles', function (Blueprint $table) {
            $table->id()->autoIncrement();

            $table->unsignedBigInteger('mobileType_id');
            $table->string('color');
            $table->unsignedBigInteger('provide_id');
            $table->integer('quantity');
            $table->date('priceImport');


            $table->foreign('provide_id')->references('id')
                ->on('provides')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('mobileType_id')->references('id')
                ->on('mobile_types')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobiles');
    }
};
