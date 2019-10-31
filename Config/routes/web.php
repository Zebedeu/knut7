<?php
/**
 *
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
 * @version   1.0.7
 *
 *
 */

/**
 * Created by PhpStorm.
 * User: artphotografie
 * Date: 17/10/17
 * Time: 19:13
 */


// Router 
$router = new \Ballybran\Helpers\Routing\Map();


/*
* Routes accept a URI, Closure and a name optional
* example output http://your-app.test/user
* $router->get('/user', 'Index@index') or $router->get('/user', function(){ return } );
* $router->get( '/user/:id', function($id) {})->with('id','[0-9]+');

* Available Router Methods: get, post, delete, PUT, url, add
*/

$router->get('/', 'Index@index');
$router->run();
