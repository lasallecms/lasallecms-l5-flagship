<?php

/**
 *
 * User Management package for the LaSalle Content Management System, based on the Laravel 5 Framework
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
 * @package    User Management package for the LaSalle Content Management System
 * @version    1.0.0
 * @link       http://LaSalleCMS.com
 * @copyright  (c) 2015, The South LaSalle Trading Corporation
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @author     The South LaSalle Trading Corporation
 * @email      info@southlasalle.com
 *
 */



// *** THIS FILE COMES FROM THE LASALLECMS USER MANGEMENT PACKAGE FOR LARAVEL 5 *** //
// ***          THIS FILE DOES NOT ORIGINATE IN THE LARAVEL APP ITSELF          *** //



return [

    /*
    |--------------------------------------------------------------------------
    | Default Authentication Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the authentication driver that will be utilized.
    | This driver manages the retrieval and authentication of the users
    | attempting to get access to protected areas of your application.
    |
    | Supported: "database", "eloquent"
    |
    */

    'driver' => 'eloquent',

    /*
    |--------------------------------------------------------------------------
    | Authentication Model
    |--------------------------------------------------------------------------
    |
    | When using the "Eloquent" authentication driver, we need to know which
    | Eloquent model should be used to retrieve your users. Of course, it
    | is often just the "User" model but you may use whatever you like.
    |
    */

    'model' => Lasallecms\Usermanagement\Models\User::class,

    /*
    |--------------------------------------------------------------------------
    | Authentication Table
    |--------------------------------------------------------------------------
    |
    | When using the "Database" authentication driver, we need to know which
    | table should be used to retrieve your users. We have chosen a basic
    | default value but you may easily change it to any table you like.
    |
    */

    'table' => 'users',

    /*
    |--------------------------------------------------------------------------
    | Password Reset Settings
    |--------------------------------------------------------------------------
    |
    | Here you may set the options for resetting passwords including the view
    | that is your password reset e-mail. You can also set the name of the
    | table that maintains all of the reset tokens for your application.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'password' => [
        'email' => 'emails.password',
        'table' => 'password_resets',
        'expire' => 60,
    ],

/*
	|--------------------------------------------------------------------------
	| Forbidden Top Level Domains
	|--------------------------------------------------------------------------
	|
	| Email addresses with these top level domains will not be registered
	|
	| Examples: '.ru', '.cn'
	|
	*/

    'forbiddenTLDs' => [
        '.ru',
        '.cn',
    ],


    /*
	|--------------------------------------------------------------------------
	| Admin Login Form View Folder
	|--------------------------------------------------------------------------
	|
	| The login form is created independently of the admin template. It's just something
    | on its own. The default view folder is "views/admin/login/admin_login_view_folder/". The default
    | assets folder is "public/admin/login/admin_login_view_folder/"
	|
	*/
    //'admin_login_view_folder' => 'default',
    'admin_login_view_folder' => 'retroradioes',


    /*
	|--------------------------------------------------------------------------
	| Admin Logout Form View Folder
	|--------------------------------------------------------------------------
	|
	| The logout form is created independently of the admin template. It's just something
    | on its own. The default view folder is "views/admin/logout/admin_logout_view_folder/". The default
    | assets folder is "public/admin/logout/admin_logout_view_folder/"
	|
	*/
    //'admin_logout_view_folder' => 'default',
    'admin_logout_view_folder' => 'retroradioes',


    /*
    |--------------------------------------------------------------------------
    | Administrator, first among equals
    |--------------------------------------------------------------------------
    |
    | The "Super Administrator" who can *NOT* be deleted in the user table.
    |
    | Use the email address.
    |
    */
    'administrator_first_among_equals_email' => '',


    /*
    |--------------------------------------------------------------------------
    | Admin IP Addresses allowed
    |--------------------------------------------------------------------------
    |
    | Users from the following IP addresses are permitted to login to the admin.
    | Leave blank if not applicable.
    | If you use a package for user/login/registration, then this may not work!
    |
    */
    'perform_the_ip_addresses_for_admin_check' => true,
    'admin_ip_addresses_allowed' => [
        '127.0.0.1',
    ],


    /*
    |--------------------------------------------------------------------------
    | Users who are allowed to access the admin
    |--------------------------------------------------------------------------
    |
    | These users are allowed to access the admin.
    | These users are still subject to other custom admin checks.
    | The "first among equals" user *MUST* not be listed as subject to the login checks
    |
    | Use email addresses.
    |
    */
    'perform_the_users_allowed_to_access_admin_check' => true,
    'users_allowed_to_access_the_admin' => [],

    /*
    |--------------------------------------------------------------------------
    | User groups that are allowed to access the admin
    |--------------------------------------------------------------------------
    |
    | These user groups are allowed to access the admin.
    | Sure, this specification is *supposed* to be buried in the code somewhere. But..
    | a quick way to prevent "Administrators" from accessing the admin during a testing
    | phase or maintenance or during some brief time period, without messing around with
    | the permanent group assignments.
    |
    */
    'perform_the_usergroups_allowed_to_access_admin_check' => 'true',
    'usergroups_allowed_to_access_the_admin' => [
        'Super Administrator',
        'Administrator',
    ],


];
