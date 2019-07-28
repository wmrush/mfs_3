<?php

namespace App\Controllers;


class AccountController extends UserAccount
{
    public function indexAction()
    {
        $data['UserInfo'] = $this->UserInfo;
        echo $this->Tpl('layouts', 'account/stats', $data);
    }
}