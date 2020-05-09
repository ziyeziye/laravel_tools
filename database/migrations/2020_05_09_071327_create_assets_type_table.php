<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssetsTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assets_type', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('net_type_id')->unsigned()->comment('主网类型ID');
			$table->string('assets_name', 16)->comment('资产名称');
			$table->string('icon', 500)->nullable()->comment('图标');
			$table->string('description', 500)->nullable()->comment('描述');
			$table->string('contract')->comment('合约地址');
			$table->boolean('is_main')->default(0)->comment('是否主网币默认0不是,1是');
			$table->boolean('is_active')->nullable()->default(0)->comment('是否默认开启0不是,1是');
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
		Schema::drop('assets_type');
	}

}
