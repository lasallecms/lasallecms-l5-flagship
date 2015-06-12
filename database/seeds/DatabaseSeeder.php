<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UsermanagementTableSeeder');

	$this->call('LasallecmsapiTableSeeder');

	if ( File::exists($this->application->databasePath() . '/seeds/LasallecrmapiTableSeeder.php') )
	{
		$this->call('LasallecrmapiTableSeeder');
	}

	if ( File::exists($this->application->databasePath() . '/seeds/TodoTableSeeder.php') )
	{
		$this->call('TodoTableSeeder');
	}

        Model::reguard();
    }
}
