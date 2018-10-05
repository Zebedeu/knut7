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


$listUser =[
    'mozilgla/5.0'
];

$ips = array(
    '::192.168.0.2',
    '0:0:0:0:0:0:192.168.0.2',
    '192.168.0.2',
    '::C0A8:2',
    '0:0:0:0:0:0:C0A8:2'
);

//$fire =  new \Ballybran\Helpers\Firewall\Firewall($ips);
////
//$finals = array();
//foreach($ips as $ip) {
//    $finals[] = $fire->ipToHex($ip);
//
//}
//var_dump($finals);
//


//$user_ip = $fire->find_net("localhost","255.255.255.224");

//echo $user_ip; // Output IP address [Ex: 177.87.193.134]



$registry = \Ballybran\Database\RegistryDatabase::getInstance();
$registry->set("PDO",

                new \Ballybran\Database\Drives\AbstractDatabasePDO
                (
                    include __DIR__.'/Config/Database/Config.php'
                )
);


$filter = new \Ballybran\Helpers\Firewall\Firewall(
    array(
        '127.*.*.1',
        '192.168.0.1',
        '172.0.0.*',
        '173.0.*.*',
        '126.1.0.0/255.255.0.0',
        '125.0.0.1-125.0.0.9',
    ));
$c = $filter->ipToHex('127.0.0.1');

    Routes::route();


//Map::add('User/', null, function() {
//})->exe();
//
//$c = Map::add('Index/', null, function() {
//})->exe();

exit;
