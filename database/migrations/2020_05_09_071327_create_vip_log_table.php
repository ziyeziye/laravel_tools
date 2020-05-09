<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVipLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vip_log', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('device_id', 200)->comment('设备唯一码(uuid)');
			$table->bigInteger('vip_id')->unsigned()->comment('会员ID');
			$table->boolean('amount')->default(0)->comment('数量');
			$table->decimal('price', 26, 8)->comment('单价');
			$table->decimal('total_price', 26, 8)->comment('总价');
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
		Schema::drop('vip_log');
	}

}
