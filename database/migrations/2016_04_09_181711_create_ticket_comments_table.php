<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('comment');
			$table->integer('user_id')->unsigned();
			$table->integer('ticket_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('ticket_id')->references('id')->on('tickets');
			$table->nullableTimestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_comments');
	}

}
