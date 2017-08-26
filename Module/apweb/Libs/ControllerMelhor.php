<?php

/**
 *
 * knut7 Framework (http://framework.artphoweb.com/)
 * knut7 FW(tm) : Rapid Development Framework (http://framework.artphoweb.com/)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link      http://github.com/zebedeu/artphoweb for the canonical source repository
 * @copyright (c) 2016.  knut7  Software Technologies AO Inc. (http://www.artphoweb.com)
 * @license   http://framework.artphoweb.com/license/new-bsd New BSD License
 * @author    Marcio Zebedeu - artphoweb@artphoweb.com
 * @version   1.0.0
 */

namespace Module\Applications\Libs;

use FWAP\Library\Session;
use FWAP\Core\Ap_Controller;

class ControllerMelhor extends Ap_Controller {

    public $array;

    public function __construct() {
        parent::__construct();
        $d = $this->array;
    }

    public function insert($data) {
        $this->array = $data;
        foreach ($this->array as $key => $value) {
            echo ucwords($value);
        }
    }

}
