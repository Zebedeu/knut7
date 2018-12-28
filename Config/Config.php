<?php

/**
 * KNUT7 K7F (http://knut7.com)
 * KNUT7 K7F (tm) : Rapid Development Framework (http://knut7.com)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link      http://github.com/knut7/knut7 for the canonical source repository
 * @copyright (c) 2015.  KNUT7  Software Technologies AO Inc. (http://knut7.com)
 * @license   http://knut7.com/license/new-bsd New BSD License
 * @author    Marcio Zebedeu - artphoweb@artphoweb.com
 * @version   1.0.2
 */
//insert the name for your project



if(isset($_GET['demo'])) {
    $demo['demo'] = $_GET['demo'];
    $MY_PROJECT_NAME = $demo['demo'];
} else {
    $MY_PROJECT_NAME = 'Ap';
}
$HEADER_TITLE ="";
$code = 'en';

/**
 *
 */
define('TYPE', 'PDO'); // Insert ou type database Drive hire. \\ PDO, MYSQLI, POSTGROUL and SQLite
define('DB_PORT', 8889);
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', '');

