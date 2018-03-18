<?php
/**
 * KNUT7 K7F (http://framework.artphoweb.com/)
 * KNUT7 K7F (tm) : Rapid Development Framework (http://framework.artphoweb.com/)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link      http://github.com/zebedeu/artphoweb for the canonical source repository
 * @copyright (c) 2015.  KNUT7  Software Technologies AO Inc. (http://www.artphoweb.com)
 * @license   http://framework.artphoweb.com/license/new-bsd New BSD License
 * @author    Marcio Zebedeu - artphoweb@artphoweb.com
 * @version   1.0.2
 */


use Ballybran\Helpers\Routing\Routes;

require_once "vendor/knut7/framework/src/Ballybran/Config/autoload.php";
require 'vendor/knut7/framework/src/Ballybran/Config/Config.php';
require 'vendor/autoload.php';

/**
 *
 * Load the Bootstrap!
 *
 */

ini_set("display_errors", 1);


$registry = \Ballybran\Database\RegistryDatabase::getInstance();
$registry->set("PDO",

                new \Ballybran\Database\Drives\AbstractDatabasePDO
                    (
                    include __DIR__.'/Config/Database/Config.php'
                    )
                );
$registry->set("MYSQL",

    new \Ballybran\Database\Drives\AbstractDatabaseMysqli()
);
$registry->set("POSTGL",

    new \Ballybran\Database\Drives\AbstractDatabasePDO
    (
        include __DIR__.'/Config/Database/Config.php'
    )
);
Routes::route();


//Map::add('User/', null, function() {
//})->exe();
//
//$c = Map::add('Index/', null, function() {
//})->exe();

exit;
