<?php

namespace App\Controllers\User;


use App\Controllers\UserAccount;

class AccountController extends UserAccount
{
    public function indexAction()
    {
        $data['UserInfo'] = $this->UserInfo;
        $this->tplUser('account/stats', $data);
    }
}