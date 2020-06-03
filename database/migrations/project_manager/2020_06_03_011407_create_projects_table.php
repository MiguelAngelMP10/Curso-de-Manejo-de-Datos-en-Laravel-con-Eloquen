<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->integer('project_id', true);
			$table->integer('city_id')->nullable()->index('city_id');
			$table->integer('company_id')->nullable()->index('company_id');
			$table->integer('user_id')->nullable()->index('user_id');
			$table->string('name', 30)->nullable();
			$table->date('execution_date')->nullable();
			$table->tinyInteger('is_active')->nullable();
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
		Schema::drop('projects');
	}
}
