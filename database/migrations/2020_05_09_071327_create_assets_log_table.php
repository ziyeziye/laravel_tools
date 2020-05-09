<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssetsLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assets_log', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('assets_type_id')->unsigned()->index()->comment('资产类型ID');
			$table->string('assets_name', 16)->comment('资产类型名称');
			$table->bigInteger('wallet_id')->unsigned()->comment('钱包ID');
			$table->string('operate_type', 80)->index()->comment('操作类型');
			$table->decimal('amount', 26, 8)->default(0.00000000)->comment('数量');
			$table->decimal('amount_before_change', 26, 8)->default(0.00000000)->comment('变动前数量');
			$table->string('remark', 100)->nullable()->comment('备注');
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
		Schema::drop('assets_log');
	}

}
