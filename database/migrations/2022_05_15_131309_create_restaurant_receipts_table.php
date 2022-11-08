<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateRestaurantReceiptsTable extends Migration {

	public function up()
	{
		Schema::create('restaurant_receipts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('order_num');
			$table->float('total_price');
			$table->json('items');
		});
	}

	public function down()
	{
		Schema::drop('restaurant_receipts');
	}
}