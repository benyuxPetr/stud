<?php
$this->router->add('main', '/', 'HomeController:index');
$this->router->add('login', '/registration', 'RegisterController:index');
$this->router->add('add', '/registration/add', 'StudentsController:add', 'POST');