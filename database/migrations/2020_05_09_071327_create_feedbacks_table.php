<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeedbacksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feedbacks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('device_id', 200)->nullable()->comment('设备唯一码(uuid)');
			$table->string('type', 50)->default('1')->comment('类型');
			$table->text('content', 65535)->comment('内容');
			$table->string('name')->comment('联系人/称呼');
			$table->string('mobile', 100)->comment('联系方式(qq/微信/邮箱/手机号)');
			$table->string('email')->nullable()->comment('邮箱');
			$table->string('img', 1000)->nullable()->comment('图片');
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
		Schema::drop('feedbacks');
	}

}
