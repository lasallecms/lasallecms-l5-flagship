<?php


// IF ARTISAN SAYS THAT SEEDER FILES NOT FOUND, RUN composer dump-autoload


// Laravel classes
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

        // database_path function is a L5.1 helper function
        if ( File::exists(database_path() . '/seeds/LasallecrmapiTableSeeder.php') )
        {
            $this->call('LasallecrmapiTableSeeder');
        }

        if ( File::exists(database_path() . '/seeds/TodoTableSeeder.php') )
        {
            $this->call('TodoTableSeeder');
        }

            Model::reguard();
    }
}
