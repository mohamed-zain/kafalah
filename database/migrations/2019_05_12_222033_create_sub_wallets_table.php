<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_wallets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wallet_Id');
            $table->string('name');
            $table->string('financing_Ceiling');
            $table->string('sponsorship_Rate');
            $table->string('repayment_Period');
            $table->string('Balance');
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
        Schema::dropIfExists('sub_wallets');
    }
}
