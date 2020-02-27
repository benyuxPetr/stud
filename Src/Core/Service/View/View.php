<?php

namespace Src\Core\Service\View;

class View
{
    protected $theme;

    public function __construct()
    {
        $this->theme = new Theme;
    }

    public function render($template, $vars = [])
    {
        $templatePatch = ROOT_DIR . '/../Public/Templates/' . $template . '.php';

        if(!file_exists($templatePatch))
        {
            throw new \InvalidArgumentException(sprintf('Template "%s" not found in "%s"', $template, $templatePatch));
        }

        $this->theme->setData($vars);
        ob_start();
        ob_implicit_flush(0);
        try{
            require $templatePatch;
        }catch (\Exception $e)
        {
            ob_end_clean();
            echo $e->getMessage();
        }
        echo ob_get_clean();
    }
}