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
use FWAP\Core\Controller\Controller;
use FWAP\Helpers\Hook;
use FWAP\Core\View\View;
use FWAP\Core\Language\Language;

class Deshboard extends Controller {

    public function __construct() {
        parent::__construct();

        $this->view->Js = array('Deshboard/Js/default.js');
    }

    public function index() {

        $this->view->title = 'Deshboard';
        $this->view->render($this, 'index');
    }

    /**
     *
     */
    public function chearsh_by_id() {

        $resposta = $this->model->chearsh_by_id('demo');
//         $resposta = $resposta[0];
        Hook::Header('SearchUser');
    }

}
