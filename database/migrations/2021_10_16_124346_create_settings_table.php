<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comppany_name');
            $table->string('logo');
            $table->string('banar');
            $table->string('fabicon');
            $table->string('sms_sender_id')->nullable();
            $table->string('api_key')->nullable();
            $table->string('sms1')->nullable();
            $table->string('sms2')->nullable();
            $table->string('sms3')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
