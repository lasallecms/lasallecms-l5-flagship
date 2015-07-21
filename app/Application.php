<?php
namespace App;

/**
 *
 * LaSalle Content Management System, based on the Laravel 5 Framework
 * Copyright (C) 2015  The South LaSalle Trading Corporation
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
 * @copyright  (c) 2015, The South LaSalle Trading Corporation
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @author     The South LaSalle Trading Corporation
 * @email      info@southlasalle.com
 *
 */


// NOT OVERRIDING DEFAULT PATHS, BUT LEAVING THIS CLASS HERE FOR REFERENCE


/*
 * This class overrides default paths
 */
class Application extends \Illuminate\Foundation\Application
{
    /**
     * Get the path to the application configuration files.
     *
     * @return string
     */
    public function configPath()
    {
        //return $this->basePath.'/plumbing/config';
    }

    /**
     * Get the path to the database directory.
     *
     * @return string
     */
    public function databasePath()
    {
        //return $this->basePath.'/plumbing/database';


    }


    /**
     * Get the path to the storage directory.
     *
     * @return string
     */
    public function storagePath()
    {
        //return $this->basePath.'/plumbing/storage';
    }

}