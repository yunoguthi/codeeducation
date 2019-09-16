<<<<<<< HEAD
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaypalWebProfilesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paypal_web_profiles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('logo_url');
            $table->string('code'); // id do webprofile no paypal
            $table->softDeletes();
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
		Schema::drop('paypal_web_profiles');
	}

}
=======
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaypalWebProfilesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paypal_web_profiles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('logo_url');
            $table->string('code'); // id do webprofile no paypal
            $table->softDeletes();
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
		Schema::drop('paypal_web_profiles');
	}

}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
