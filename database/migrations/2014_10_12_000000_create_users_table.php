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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('telephone');
            $table->string('specialite');
            $table->string('diplome');
            $table->string('activitepro');
            $table->string('lieutravail')->nullable();
            $table->string('paiement');
            $table->string('password');
            $table->string('photo');
            $table->string('fdiplome');
            $table->boolean('approved');
            // $table->rememberToken();
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
};
