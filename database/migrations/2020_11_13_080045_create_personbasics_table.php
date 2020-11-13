<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonbasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personbasics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('age');
            $table->string('birthday');
            $table->string('charityDonor');
            $table->string('children');
            $table->string('education');
            $table->string('estimatedIncome');
            $table->string('gender');
            $table->string('lengthOfResidenc');
            $table->string('maritalStatus');
            $table->string('ownOrRent');
            $table->string('singleParent');
            $table->string('vehicle');
            $table->string('wealth');
            $table->string('yearHomeBuilt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personbasics');
    }
}
