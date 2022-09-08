<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
           // $table->unsignedBigInteger(column:'role_id');
            //$table->unsignedBigInteger(column:'user_id');
            $table->foreignId(column:'role_id')->constrained()->onDelete('cascade');
            $table->foreignId(column:'user_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            //$table->foreign(columns:'role_id')->references(columns:'id')->on(table:'roles')->onDelete(action:'cascade');
            //$table->foreign(columns:'user_id')->references(columns:'id')->on(table:'users')->onDelete(action:'cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
