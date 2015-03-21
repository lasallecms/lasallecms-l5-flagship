<?php

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
 * @version    1.0.0
 * @link       http://LaSalleCMS.com
 * @copyright  (c) 2015, The South LaSalle Trading Corporation
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @author     The South LaSalle Trading Corporation
 * @email      info@southlasalle.com
 *
 */



$factory('Lasallecms\Usermanagement\Models\User', [
    'name' =>  $faker->name,
    'email' => $faker->unique()->email,
    'password' => $faker->password
]);


$factory('Lasallecms\Usermanagement\Models\Group', 'group_registered', [
    'title'       => 'Registered',
    'description' => 'Basic front-end access only.',
    'created_by' => 'factory:Lasallecms\Usermanagement\Models\User',
    'updated_by' => 'factory:Lasallecms\Usermanagement\Models\User',
]);
$factory('Lasallecms\Usermanagement\Models\Group', 'group_administrator', [
    'title'       => 'Administrator',
    'description' => 'Basic back-end administration access only.',
    'created_by' => 'factory:Lasallecms\Usermanagement\Models\User',
    'updated_by' => 'factory:Lasallecms\Usermanagement\Models\User',
]);
$factory('Lasallecms\Usermanagement\Models\Group', 'group_super_administrator', [
    'title'       => 'Super Administrator',
    'description' => 'Highest back-end administration access.',
    'created_by' => 'factory:Lasallecms\Usermanagement\Models\User',
    'updated_by' => 'factory:Lasallecms\Usermanagement\Models\User',
]);



$factory('Lasallecms\Usermanagement\Models\User_group', 'user_group_registered', [
    'user_id'  => 'factory:Lasallecms\Usermanagement\Models\User',
    'group_id' => '1',
]);
$factory('Lasallecms\Usermanagement\Models\User_group', 'user_group_administrator', [
    'user_id'  => 'factory:Lasallecms\Usermanagement\Models\User',
    'group_id' => '2',
]);
$factory('Lasallecms\Usermanagement\Models\User_group', 'user_group_super_administrator', [
    'user_id'  => 'factory:Lasallecms\Usermanagement\Models\User',
    'group_id' => '3',
]);