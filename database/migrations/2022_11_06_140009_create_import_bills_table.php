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
        Schema::create('import_bills', function (Blueprint $table) {
            $table->id()->autoIncrement();

            $table->unsignedBigInteger('epl_ID');
            $table->date('DateImport');
            $table->unsignedBigInteger('provideID');


            $table->foreign('provideID')->references('id')
                ->on('provides')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('epl_ID')->references('id')
                ->on('employees')
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
        Schema::dropIfExists('import_bills');
    }
};
