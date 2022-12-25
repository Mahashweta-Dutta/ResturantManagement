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
        Schema::create('customerInfo', function (Blueprint $table) {
            $table->id();
            $table->string('customerFName',100);
            $table->string('customerLName',100);
            $table->string('customerEmailId',100)->nullable()->unique();
            $table->string('customerContactNo',100)->unique();
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
        Schema::dropIfExists('customerInfo');
    }
};
