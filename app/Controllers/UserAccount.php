<?php

namespace App\Controllers;

use Engine\Core\Controller;
use App\Models\User;

class UserAccount extends Controller
{
    public $UserInfo;

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->Check("UserId") or !$this->session->Check("Login")) {
            $this->session->UnsetSession("UserId");
            $this->session->UnsetSession("Login");
            $this->session->Session_Destroy();

            $this->uri->Redirect($this->uri->Url() . '/auth');

        }


        $this->UserInfo = $this->GetInfoUser();
    }


    private function GetInfoUser()
    {
        $User = new User();
        $UserInfo = $User->GetUserInfo($this->session->Get("UserId"));
        return $UserInfo;
    }
}