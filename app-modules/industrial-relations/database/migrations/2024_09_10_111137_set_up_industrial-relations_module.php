<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class() extends Migration {
	public function up()
	{
        DB::statement('CREATE SCHEMA IF NOT EXISTS industrial_relations');
	}

	public function down()
	{
		// Don't listen to the haters
        DB::statement('DROP SCHEMA IF EXISTS industrial_relations CASCADE');
	}
};
