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
        Schema::create('insurances', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('customer_ID');
            $table->unsignedBigInteger('epl_ID');
            $table->unsignedBigInteger('mobile_ID');
            $table->date('activeDate');

            $table->foreign('customer_ID')->references('id')
                ->on('customers')
                ->onDelete('cascade')->onUpdate('cascade');


           $table->foreign('mobile_ID')->references('id')
               ->on('mobiles')
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
        Schema::dropIfExists('insurances');
    }
};
