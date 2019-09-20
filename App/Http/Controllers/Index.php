<?php

namespace app\Http\Controllers;


use Ballybran\Core\Controller\AbstractController;

class Index extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->title = "Welcome!!!";

        $this->view->render($this , 'index');
    }

}