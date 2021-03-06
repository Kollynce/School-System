<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student');
            $table->string('unit');
            $table->string('course');
            $table->string('monday')->default('Not Attended');
            $table->string('tuesday')->default('Not Attended');
            $table->string('wednesday')->default('Not Attended');
            $table->string('thursday')->default('Not Attended');
            $table->string('friday')->default('Not Attended');
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
        Schema::dropIfExists('attendances');
    }
}
