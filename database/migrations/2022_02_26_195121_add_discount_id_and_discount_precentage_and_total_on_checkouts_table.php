<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDiscountIdAndDiscountPrecentageAndTotalOnCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->foreignId('discount_id')->after('midtrans_booking_code')->nullable();
            $table->unsignedInteger('discount_precentage')->after('discount_id')->nullable();
            $table->unsignedInteger('total')->after('discount_precentage')->default(0);

            $table->foreign('discount_id')->references('id')->on('discounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->dropForeign('checkout_discount_id_foreign');
            $table->dropColumn(['discount_id', 'discount_precentage', 'total']);
        });
    }
}
