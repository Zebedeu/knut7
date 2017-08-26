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

/**
 * Created by PhpStorm.
 * User: artphotografie
 * Date: 2016/02/14
 * Time: 10:59 AM
 */

class Index extends Controller {

    public function __construct() {

        parent::__construct();
    }

    public function index() {

        $this->view->title = 'Home';

        $this->view->public = $this->model->exibirAricle();
        $this->view->GetTitile = $this->model->exibiAllTitle();

//         $this->view->c = $this->route->link('Article/Index/'. "%d" , Hash::token(), true);
        // $this->view->c = $this->route->link('Article/art_pre_post/', Hash::token(), false );
//        var_dump($this->view->data);

        // $this->view->data['welcome_text'] = $this->language->get('welcome_text');
        // $this->view->data['pic_empty'] = $this->language->get('pic_empty');
        // $this->view->data['welcome_message'] = $this->language->get('welcome_message');

        $this->view->render($this, 'index');
    }



}
