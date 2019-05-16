<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wallet_Id');
            $table->string('loanId');
            $table->string('agentName');
            $table->string('Gender');
            $table->string('age');
            $table->string('identityNo');
            $table->string('phoneNo');
            $table->string('loanType');
            $table->string('loanAmount');
            $table->string('installmentsNum');
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
        Schema::dropIfExists('loans');
    }
}
