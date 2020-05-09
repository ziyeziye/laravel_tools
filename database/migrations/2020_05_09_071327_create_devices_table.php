<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDevicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('devices', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('uuid', 200)->comment('设备唯一码');
			$table->string('model')->nullable()->comment('设备型号');
			$table->boolean('max_wallet')->default(0)->comment('最大支持钱包数');
			$table->boolean('max_wallet_name')->default(0)->comment('最大支持钱包名字符数');
			$table->boolean('status')->default(1)->comment('默认1正常，0禁止操作');
			$table->boolean('vip')->default(0)->comment('是否会员0否,1是');
			$table->dateTime('vip_due_time')->comment('会员到期时间');
			$table->timestamps();
			$table->primary(['id','uuid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('devices');
	}

}
