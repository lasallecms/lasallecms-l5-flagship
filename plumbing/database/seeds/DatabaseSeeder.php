<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use \Illuminate\Contracts\Foundation\Application;
use \Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder {

    /**
     * The application instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $application;

    /**
     * Inject the application instance
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }


    /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        // UserManagement & CMS API packages are mandatory
		$this->call('UsermanagementTableSeeder');
        $this->call('LasallecmsapiTableSeeder');


        // LaSalleCRM is optional
        if ( File::exists($this->application->databasePath() . '/seeds/LasallecrmapiTableSeeder.php') )
        {
            $this->call('LasallecrmapiTableSeeder');
        }
	}

}