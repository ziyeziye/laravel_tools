<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title', 1500)->comment('标题');
			$table->text('content', 65535)->comment('内容');
			$table->boolean('status')->default(1)->comment('默认1显示，0隐藏');
			$table->string('type', 150)->comment('类型');
			$table->integer('hot')->unsigned()->default(0)->comment('点击数');
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
		Schema::drop('questions');
	}

}
