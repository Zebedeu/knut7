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

/**
 * Created by PhpStorm.
 * User: artphotografie
 * Date: 2016/02/14
 * Time: 11:08 AM
 */
use FWAP\Core\Controller\Controller;
use FWAP\Helpers\Http\Hook;
use FWAP\Helpers\Ucfirst;
use \FWAP\Helpers\Security\Session;
use FWAP\Helpers\Utility\Hash;

class User extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->title = 'USUARIOS';
        $this->view->render($this, 'index');
    }

    /**
     * @param $data
     */
    public function signUp() {

        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

            $data['firstname'] = Ucfirst::_ucfirst(htmlspecialchars($_POST['firstname']));
            $data['lastname'] = Ucfirst::_ucfirst( htmlspecialchars($_POST['lastname']));
            $data['username'] = htmlspecialchars($_POST['username']);
            $data['email'] = $_POST['email'];
            $data["password"] = Hash::Create(ALGO, $_POST['password'], HASH_KEY);


            echo $this->model->signUp($data);
        }
        $this->view->render($this, 'register');
    }

    /**
     *
     */
    public function signIn()
    {

        if (empty($_POST["username"]) && empty($_POST["password"])) {
           echo "string1";
        }

        $data['username'] = $_POST["username"];
        $pass = $_POST["password"];

        if (empty($this->model->signIn($data)[0])) {
           echo "string2";
        }

        $resposta = $this->model->signIn($data)[0];

        if ($resposta["password"] == Hash::Create(ALGO, $pass, HASH_KEY)) {
           $this->CreateSession($resposta["username"], $resposta["role"], $resposta["id"]);
              Hook::Header('Account/Cpanel');

        }

    }

    

    /**
     *
     */
    public function selectData() {
        $resposta = $this->model->selectData(array(':username', $_POST['username']));
        $resposta = $resposta[0];
    }

    /**
     *
     * @param type $username
     * @param type $id
     */
    public function CreateSession($username, $role, $id) {
        Session::set('U_NAME', $username);
        Session::set('role', $role);
        Session::set('ID', $id);
    }

    public function DestroySession() {
        Session::Destroy();
        Hook::Header('');
    }

}
