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
 * @link       http://LaSalleCMS.com
 * @copyright  (c) 2015, The South LaSalle Trading Corporation
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @author     The South LaSalle Trading Corporation
 * @email      info@southlasalle.com
 *
 */


/* *********************************************************************************************** */
/* *********************************************************************************************** */
/*
 *  Originally, I placed front-end routes in \Lasallecms\Lasallecmsfrontend\Http\routes.php.
 *  Seems like a good idea because the standard front-end routes emanate from this package. But, not
 *  such a great idea when it's desirable to customize those routes.
 *
 *  To allow the "home" and "{slug}" to be customized -- or over-ridden -- I am extracting the two main
 *  routes out of my front-end package, and placing them here in my Flagship's route.php.
 *
 */
/* *********************************************************************************************** */
/* *********************************************************************************************** */


// single post by slug, or category listing (by title)
// originally in my front-end package
$router->get('{slug}', '\Lasallecms\Lasallecmsfrontend\Http\Controllers\TriageController@triage')->where('slug', '!=', 'admin');

// Home
// originally in my front-end package
$router->get('/', [
    'as'   => 'home',
    'uses' => '\Lasallecms\Lasallecmsfrontend\Http\Controllers\TriageController@home',

]);



// Route for my contact package's thank you page. Here for convenience only
/*
Route::get('contact_form_thank_you',[
    'as'   => 'contact_form_thank_you',
    'uses' => 'ContactController@thankyou'
]);
*/