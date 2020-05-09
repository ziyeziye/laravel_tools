<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWalletAssetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wallet_assets', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('wallet_id')->unsigned()->comment('钱包ID');
			$table->bigInteger('assets_type_id')->unsigned()->comment('资产类型ID');
			$table->string('address', 42)->comment('地址');
			$table->decimal('amount', 26, 8)->default(0.00000000)->comment('余额');
			$table->integer('net_type_id')->unsigned()->comment('主网类型ID');
			$table->string('net_type_nmae', 16)->default('qki')->comment('主网类型（eth btc qki）');
			$table->decimal('price', 26, 8)->comment('单价（USDT）');
			$table->decimal('total_price', 26, 8)->comment('总价值（USDT）');
			$table->boolean('is_active')->nullable()->default(1)->comment('是否开启默认1是,0不是');
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
		Schema::drop('wallet_assets');
	}

}
