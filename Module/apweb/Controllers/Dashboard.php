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
use \FWAP\Helpers\Security\Session;
use FWAP\Helpers\Hook;

class Dashboard extends Controller {

    public function __construct() {
        parent::__construct();

        $this->view->Js = array('Dashboard/Js/default.js');
    }

    public function index() {
        if (Session::exist()) {
            if (Session::get('role') == 'owner') {
                $this->view->title = "Dashboard";
                $this->view->render($this, 'index');
            }
        } else {
            Hook::Header('');
        }
    }

    public function customers() {
        if (Session::exist()) {
            if (Session::get('role') == 'owner' || Session::get('role') == 'admin') {
                $this->view->title = "Customers";
                $this->view->user = $this->model->getAllUser();
                $this->view->render($this, 'customers');
            }
        } else {
            Hook::Header('');
        }
    }

}
