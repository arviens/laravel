<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserModelUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_email_unique');
            $table->dropColumn(['name', 'email']);
            $table->string('username', 50)->after('id')->unique();
            $table->string('internal_name', 50)->after('username');
            $table->string('role', 50)->after('internal_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_username_unique');
            $table->dropColumn(['username', 'internal_name', 'role']);
            $table->string('name');
            $table->string('email')->unique();
        });
    }
}
