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
use FWAP\Library\Session;
use FWAP\Helpers\Hook;

class Customers extends Controller {

    public function __construct() {
        parent::__construct();

        $this->view->Js = array('Dashboard/Js/default.js');
    }

    public function add() {

        $this->view->title = "Customers";
        $this->view->render($this, 'add');
    }

    /**
     * @param $data
     */
    public function edit($id, $username = null) {

        $this->view->title = "Customers";
        $this->view->UserData = $this->model->getUser($id)[0];
        $this->view->users = $this->model->getusers($id);


        $this->view->render($this, 'edit');
    }

    /**
     * @param $data
     */
    public function updates() {
        if ($_POST['id']) {
            $data['nome'] = Ucfirst::_ucfirst(htmlspecialchars($_POST['nome']));
            $data['username'] = $_POST['username'];
            $data['email'] = $_POST['email'];
            $data['role'] = $_POST['role'];

            // $data['password'] = Hash::Create(ALGO, $_POST['password'], HASH_KEY);

            return $this->model->updates($data, $_POST['id']);
        } else {
            echo "NADA FOI ATUALIZADO";
        }
    }

    public function deletes($id) {
        if (Session::exist()) {
            if (Session::get('role') == 'owner') {
                $this->model->deletes($id);
                Hook::Header('Dashboard/customers');
            } else {
                Hook::Header('user/signUp');
            }
        }
    }

}
