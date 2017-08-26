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
use FWAP\Core\Ap_Controller\Ap_Controller;
use \FWAP\Exception\Exception;

class Categorias extends Ap_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($value = '') {
        $this->view->Allcat = $this->model->_allCategorias();
        $this->view->Allfoot = $this->model->Allfootbal();
        $this->view->Allfoot = $this->model->AllCarro();
        $this->view->Allfoot = $this->model->AllSemCategoria();
        $this->view->Allfoot = $this->model->AllOutros();
        $this->view->render($this, 'index');
    }

    public function footbal($id) {
        switch ($id) {
            case true:
                $this->view->foot = $this->model->footbal($id);
                // $this->view->Allfoot = $this->model->Allfootbal();
                $this->view->render($this, 'index');
                break;
            case false:
                $this->view->Allfoot = $this->model->Allfootbal();
                $this->view->render($this, 'index');
                break;
            default:
                echo "string";
                break;
        }
    }

    public function carro($id) {

        switch ($id) {
            case true:
                $this->view->foot = $this->model->carro($id);
                // $this->view->Allfoot = $this->model->Allfootbal();
                $this->view->render($this, 'index');
                break;
            case false:
                $this->view->Allfoot = $this->model->AllCarro();
                $this->view->render($this, 'index');
                break;
            default:
                echo "string";
                break;
        }
    }

    public function semCategoria($id) {
        switch ($id) {
            case true:
                $this->view->foot = $this->model->semCategoria($id);
                // $this->view->Allfoot = $this->model->Allfootbal();
                $this->view->render($this, 'index');
                break;
            case false:
                $this->view->Allfoot = $this->model->AllSemCategoria();
                $this->view->render($this, 'index');
                break;
            default:
                echo "string";
                break;
        }
    }

    public function Outros($id) {
        switch ($id) {
            case true:
                $this->view->foot = $this->model->Outros($id);
                // $this->view->Allfoot = $this->model->Allfootbal();
                $this->view->render($this, 'index');
                break;
            case false:
                $this->view->Allfoot = $this->model->AllOutros();
                $this->view->render($this, 'index');
                break;
            default:
                echo "string";
                break;
        }
    }

}
