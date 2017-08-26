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
use FWAP\Core\View\View;
use FWAP\Core\Language\Language;

class SearchUser extends Controller {

    public function __construct() {
        parent::__construct();

        $this->view->Js = array('SearchUser/Js/default.js');
    }

    public function index() {

        $this->view->title = 'Pesquisar';
        $this->view->render($this, 'index');
    }

    public function getSearch() {

        $this->view->title = 'Resultado';
        if (!empty($_POST['busca'])) {
            $busca = $_POST['busca'];
            $this->view->UserInfo = $this->model->getSearch($busca);
        }
        $this->view->render($this, 'resultado');
    }

}
