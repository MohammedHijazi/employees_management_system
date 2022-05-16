<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('employee_id')->unique();
            $table->string('first_name');
            $table->string('second_name');
            $table->string('third_name');
            $table->string('last_name');
            $table->string('specialization');
            $table->enum('social_status',['single','married'])->default('single');
            $table->enum('sex',['male','female']);
            $table->string('mobile_number');
            $table->string('phone_number')->nullable();
            $table->string('email');
            $table->date('hiring_date');
            $table->date('birthday_date');
            $table->string('address');
            $table->string('image_path')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
