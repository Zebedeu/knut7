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


$router = new \Ballybran\Helpers\Routing\Map();

$router->get('/', 'Index#index');
$router->get('/index/:id-:slug', function($id, $slug){
    echo "$id  -    $slug";
    $c = new  \Module\Teste\Controllers\Index();


}, "index", null )->with('id', '([0-9]+)')->with('slug', '([a-z]+)');


$router->get('/index/', "Index#index");
$router->get('/api/:id/:teste/:bla', function($id, $c, $d){ echo "Voila l'article";
return (new Module\Teste\Controllers\Api() )->index($id, $c, $d);
});

$router->post('/ver/', function(){
    $d =  new Module\Teste\Controllers\Index();
    $d->login();
}, "Index#login", "POST");

$router->run();
