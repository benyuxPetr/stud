<?php

namespace Src\Core\Controller;

use Src\Core\Controller;
use Src\Core\DI;

class HomeController extends Controller
{
    public function __construct(DI $di)
    {
        parent::__construct($di);
    }

    public function index(){
        $data = ['pageName' => 'Students'];
        $this->view->render('home', $data);
    }
}