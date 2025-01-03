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
    Schema::create('patients', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('nik')->unique();
        $table->string('gender');
        $table->date('birth_date');
        $table->string('status'); // e.g., "positive", "recovered", "deceased"
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
        Schema::dropIfExists('patients');
    }
};
