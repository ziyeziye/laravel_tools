<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWalletsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wallets', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('device_id', 200)->comment('设备唯一码(uuid)');
			$table->string('wallet_name', 500)->comment('钱包名');
			$table->decimal('total_amount', 26, 8)->default(0.00000000)->comment('总价值（USDT）');
			$table->boolean('is_backup')->default(0)->comment('是否备份默认0不是,1是');
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
		Schema::drop('wallets');
	}

}
