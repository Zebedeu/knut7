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
use FWAP\Helpers\Http\Hook;
use FWAP\Helpers\Security\Session;

/**
 * Created by PhpStorm.
 * User: artphotografie
 * Date: 2016/02/14
 * Time: 11:06 AM
 */

class Faq extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->title = 'FAQ';
        $this->view->faque = $this->model->_getFaq();
        $this->view->render($this, 'index');
    }

    /**
     * @param $data
     */
    public function insertFaq() {
            if( Session::get('role') != 'owner') {
                return Hook::Header('faq');
            }
        if (!empty($_POST['quest']) && !empty($_POST['respo'])) {
            $data['quest'] = $_POST['quest'];
            $data['respo'] = $_POST['respo'];

            $this->model->insertFaq($data);
        }
        $this->view->render($this, 'insertFaq');
    }

}
