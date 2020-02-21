<?php

namespace Src\Core\Service;

use Src\Core\Di;

abstract class AbstractProvider
{
    protected $di;

    public function __construct(Di $di)
    {
        $this->di = $di;
    }

    abstract function init();
}