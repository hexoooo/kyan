<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration {

	public function up()
	{
		Schema::create('about_us', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('phone');
			$table->text('link1');
			$table->text('link2');
			$table->text('link3');
		});
	}

	public function down()
	{
		Schema::drop('about_us');
	}
}