<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesReadLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages_read_log', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('device_id', 200)->comment('设备唯一码(uuid)');
			$table->string('remark', 1000)->nullable()->comment('备注');
			$table->timestamps();
			$table->primary(['id','device_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messages_read_log');
	}

}
