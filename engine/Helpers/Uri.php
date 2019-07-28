<?php

namespace Engine\Helpers;

class Uri
{

    public function Redirect($Url)
    {
        header("Location: http://" . $Url);
        exit;
    }

    public function Url()
    {
        return $_SERVER['HTTP_HOST'];
    }


}