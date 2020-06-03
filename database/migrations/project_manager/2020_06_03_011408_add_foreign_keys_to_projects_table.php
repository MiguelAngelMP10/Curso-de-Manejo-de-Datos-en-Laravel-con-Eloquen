<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProjectsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('projects', function(Blueprint $table)
		{
			$table->foreign('city_id', 'projects_ibfk_1')->references('city_id')->on('cities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('company_id', 'projects_ibfk_2')->references('company_id')->on('companies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'projects_ibfk_3')->references('user_id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('projects', function(Blueprint $table)
		{
			$table->dropForeign('projects_ibfk_1');
			$table->dropForeign('projects_ibfk_2');
			$table->dropForeign('projects_ibfk_3');
		});
	}
}
