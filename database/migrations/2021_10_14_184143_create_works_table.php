<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_id');
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('name_of_owner')->nullable();
            $table->string('trade_license_no')->nullable();
            $table->string('trade_license_issue_date')->nullable();
            $table->string('national_id')->nullable();
            $table->string('tin_certificate')->nullable();
            $table->string('bank_account_numbar')->nullable();
            $table->string('bank_account_name')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch_name')->nullable();
            $table->string('submission_id1')->nullable();
            $table->string('submission_id2')->nullable();
            $table->string('gmail')->nullable();
            $table->string('gmail_password')->nullable();
            $table->string('contact_numbar')->nullable();
            $table->float('contract',18,2)->nullable();
            $table->float('payment',18,2)->nullable();
            $table->float('due',18,2)->nullable();
            $table->string('note')->nullable();
            $table->string('images1')->nullable();
            $table->string('images2')->nullable();
            $table->string('images3')->nullable();
            $table->string('images4')->nullable();
            $table->string('images5')->nullable();
            $table->string('images6')->nullable();
            $table->string('images7')->nullable();
            $table->string('images8')->nullable();
            $table->string('images9')->nullable();
            $table->string('images10')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('payment_status')->default(0);
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
        Schema::dropIfExists('works');
    }
}
