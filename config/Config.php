<?php

/**
 * KNUT7 K7F (https://marciozebedeu.com/)
 * KNUT7 K7F (tm) : Rapid Development Framework (https://marciozebedeu.com/).
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @see      http://github.com/knut7/knut7 for the canonical source repository
 *
 * @copyright (c) 2015.  KNUT7  Software Technologies AO Inc. (https://marciozebedeu.com/)
 * @license   https://marciozebedeu.com//license/new-bsd New BSD License
 * @author    Marcio Zebedeu - artphoweb@artphoweb.com
 *
 * @version   1.0.2
 */


$env      = parse_ini_file('.env')

/*
|--------------------------------------------------------------------------
| MY PROJECT NAME
|--------------------------------------------------------------------------
|   insert the name for your project
*/

if (isset($_GET['demo'])) {
    $demo['demo'] = $_GET['demo'];
    $MY_PROJECT_NAME = $demo['demo'];
} else {
    $MY_PROJECT_NAME = 'Http';
}

/*
|--------------------------------------------------------------------------
| HEADER TITLE
|--------------------------------------------------------------------------
|
|
*/

$HEADER_TITLE = 'Invoice By Kepya';

/*
|--------------------------------------------------------------------------
| HEADER DESCRIPTION
|--------------------------------------------------------------------------
|
*/

$HEADER_DESCRIPTION = 'Modelo site de advocacia';

/*
|--------------------------------------------------------------------------
| MY LOCALE
|--------------------------------------------------------------------------
|
*/

$code = 'en';
$MY_LOCALE = 'pt_PT.UTF-8';

/*
  |--------------------------------------------------------------------------
  |  DEFAULT_UTC
  |--------------------------------------------------------------------------
  |
  | define('Country UTC - DEFAULT is UTC
  |
  */

$country_utc = 'Africa/Luanda';

/*
|--------------------------------------------------------------------------
|  Database Connection ERROR
|--------------------------------------------------------------------------
|
| 1 - dev -
|
*/

$_dev = '';

/*
|--------------------------------------------------------------------------
|  Database Connection
|--------------------------------------------------------------------------
|
| define('TYPInsert ou type database Drive hire. \\ PDO, MYSQLI, POSTGROUL and SQLite
|
*/

define('TYPE' , $env["DB_DRIVE"]); // Insert ou type database Drive hire. \\ PDO, MYSQLI, POSTGROUL and SQLite
define('DB_PORT' , $env["DB_PORT"]);
define('DB_TYPE' , $env["DB_TYPE"]);
define('DB_HOST' , $env["DB_HOST"]);
define('DB_USER' ,  $env["DB_USER"]);
define('DB_PASS' ,  $env["DB_PASS"]);
define('DB_NAME' ,  $env["DB_NAME"]);

if(!defined('BASE_PORT')){
define('BASE_PORT', $env["BASE_PORT"]);
}
