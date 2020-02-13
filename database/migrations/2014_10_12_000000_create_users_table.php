<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('propertyID');
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobileNumber');
            $table->string('profession');
            $table->string('zoneCode');
            $table->string('gender');
            $table->string('maritalStatus');
            $table->string('membership');
            $table->string('address');
            $table->string('username')->unique();
            $table->timestamp('approval_status')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}


// play.supermartng.com
// admin -  staging-admin.supermartng.com


// healthplus play-hp.supermartng.com
// nivas
