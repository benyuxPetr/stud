<?php

namespace Src\Core\Controller;

use Src\Core\Controller;
use Src\Core\DI;

class RegisterController extends Controller
{
    public function __construct(DI $di)
    {
        parent::__construct($di);
    }

    public function index(){
        $data = ['pageName' => 'Registration'];
        $this->view->render('register', $data);
    }
}