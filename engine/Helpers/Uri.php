<?php

namespace Engine\Helpers;

class Uri
{

    public function Redirect($Url)
    {
        header("Location: " . $Url);
        exit;
    }

    public function Url()
    {
        return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
    }

    public function Segment($seg)
    {
        $uriOriginal = trim($_SERVER['REQUEST_URI'], '/');
        $uri = explode('/', $uriOriginal);

        return (isset($uri[$seg])) ? $uri[$seg] : '';
    }


}