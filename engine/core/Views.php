<?php

namespace Engine\Core;


class Views
{

    public $session;

    public function __construct()
    {

        //$this->session = new Session();

    }

    /**
     * Undocumented function
     *
     * @param [type] $template
     * @param array $vars
     * @param boolean $return
     * @return void
     */
    public function render($template, $vars = [], $return = false)
    {

        $fileTemplatesInclude = ROOT_DIR . '/app/Views/' . $template . '.php';

        if (!file_exists($fileTemplatesInclude)) {
            exit("No template " . $fileTemplatesInclude);
        }

        ob_start();

        if (!empty($vars) and is_array($vars)) {
            extract($vars, EXTR_OVERWRITE);
        }

        require_once $fileTemplatesInclude;

        if ($return === true) {
            $buffer = ob_get_contents();
            ob_end_clean();
            return $buffer;
        }


        $out = ob_get_contents();
        ob_end_clean();

        return $out;


    }

}