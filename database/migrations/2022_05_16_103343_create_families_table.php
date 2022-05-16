<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees','employee_id')->cascadeOnDelete();
            $table->string('full_name');
            $table->string('id_number');
            $table->string('relation');
            $table->date('birth_date');
            $table->enum('social_status',['single','married'])->default('single');
            $table->enum('study',['yes','no'])->default('yes');
            $table->enum('works',['yes','no'])->default('no');
            $table->string('id_image_path')->nullable();
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
        Schema::dropIfExists('families');
    }
}
