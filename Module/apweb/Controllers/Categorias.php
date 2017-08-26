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
use \FWAP\Exception\Exception;
use FWAP\Core\View\View;
use FWAP\Core\Language\Language;
use \FWAP\Helpers\Security\Session;
use FWAP\Helpers\Hook;

class Categorias extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->Allcat = $this->model->_allCategorias();
        $this->view->render($this, 'index');
    }

    public function getCategoryById($idName, $id = null) {

        $this->view->title = "";
        $nameCat = str_replace("-", " ", $idName);
        $this->view->category = $this->model->category($nameCat);
        $this->view->categoryByNameTitle = $this->model->categoryByNameTitle($idName);
        if (!empty($id)) {
            $this->view->article = $this->model->getArcticleBycategory($id)[0];
        }
        $this->view->render($this, 'Category');
    }

    public function createCategory() {
        if (Session::exist()) {
            if (Session::get('role') == 'owner') {
                $this->view->title = "Add Categoria";
                $this->view->delete = $this->model->_allCategorias();

                $this->view->render($this, 'createCategory');
            }
        } else {
            Hook::Header('');
        }
    }

    public function insertCategory() {

        if (!empty($_POST['name']) && !empty($_POST['description'])) {
            $data['name'] = $_POST['name'];
            $data['description'] = $_POST['description'];
            $this->model->createCategory($data);
        }
    }

    public function deleteCategory($id) {
        if (Session::exist()) {
            if (Session::get('role') == 'owner') {
                $this->model->deleteCategory($id);
                Hook::Header('Categorias/createCategory');
            }
        } else {
            Hook::Header('');
        }
    }

}
