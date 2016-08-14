<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Donors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Username',100)->unique();
            $table->string('Password',100);
            $table->string('BloodGroup',10);
            $table->date('LastDonated');
            $table->double('Contact');
            $table->string('Address',256);
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
        // Schema::drop('Donors');
    }
}
