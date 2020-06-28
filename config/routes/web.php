<?php
/**
 *
 * KNUT7 K7F (https://marciozebedeu.com/)
 * KNUT7 K7F (tm) : Rapid Development Framework (https://marciozebedeu.com/)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link      https://github.com/knut7/knu7 for the canonical source repository
 * @copyright (c) 2015.  KNUT7  Software Technologies AO Inc. (https://marciozebedeu.com/)
 * @license   https://marciozebedeu.com/license/new-bsd New BSD License
 * @author    Marcio Zebedeu - artphoweb@artphoweb.com
 * @version   1.0.7
 *
 *
 */

$router = new Ballybran\Routing\Router([
	// Paths and Namespaces
    'paths' => [
      'controllers' => 'App/Http/Controllers'
    ],
    'namespaces' => [
      'controllers' => 'App\Http\Controllers'
    ]
  ]);

$router->get('/', 'Index@index');

$router->run();
