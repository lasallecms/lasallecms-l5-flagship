<?php

namespace App\Console;

/**
 *
 * LaSalle Content Management System, based on the Laravel 5 Framework
 * Copyright (C) 2015 - 2016  The South LaSalle Trading Corporation
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @package    LaSalle Content Management System
 * @link       http://LaSalleCMS.com
 * @copyright  (c) 2015 - 2016, The South LaSalle Trading Corporation
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @author     The South LaSalle Trading Corporation
 * @email      info@southlasalle.com
 *
 */


// http://laravel.com/docs/5.1/scheduling

// In Forge, in the server's "Scheduler" tab, set up a new Scheduled Job:
// php /home/forge/domain.com/current/artisan schedule:run
// for every minute, or nightly (which is midnight) depending on your needs.

// FYI: for Akeeba Backup Pro Solo, here's a sample Scheduled Job:
// custom  03***  php /home/forge/backup.domain.com/public/cli/backup.php --profile=1


use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // blank
    ];



    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $filePath = base_path() . 'output_from_scheduler';
        $emailTo  = "foo@example.com";


        // Assumed that you want the sitemap!
        $schedule->call(function () {
            return Redirect::route('sitemap');
        })
        ->dailyAt('04:30')
        //->thenPing('http://beats.envoyer.io/heartbeat/zN89z09Ifs8A2rg')
        ;
    }


    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
