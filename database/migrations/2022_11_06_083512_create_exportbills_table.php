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
        Schema::create('exportbills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('epl_ID');
            $table->unsignedBigInteger('Customer_ID');
            $table->date('DateExport');


            $table->foreign('epl_ID')->references('id')
                ->on('employees')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Customer_ID')->references('id')
                ->on('customers')
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
        Schema::dropIfExists('exportbills');
    }
};
