<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('feature_payments')){
            Schema::create('feature_payments', function (Blueprint $table) {
                $table->increments('id');
                $table->string('user_id');
                $table->string('course_id');
                $table->text('transaction_id', 65535)->nullable();
                $table->string('payment_method', 191)->nullable();
                $table->string('total_amount', 191)->nullable();
                $table->string('currency', 191)->nullable();
                $table->string('currency_icon', 191)->nullable();
                $table->boolean('featured')->default(1);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_payments');
    }
}
