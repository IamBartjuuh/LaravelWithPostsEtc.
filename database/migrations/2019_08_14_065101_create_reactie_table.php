<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naam');
            $table->string('email');
            $table->mediumText('reactie');
            $table->unsignedBigInteger('aanvraag_id');
            $table->foreign('aanvraag_id')->references('id')->on('Helpdesk')->onDelete('cascade');
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
        Schema::dropIfExists('reactie');
    }
}
