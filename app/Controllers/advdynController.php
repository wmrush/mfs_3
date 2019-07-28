<?php
/**
 * WmRush
 * MFS 3.0
 */

namespace App\Controllers;


class advdynController extends UserAccount
{


    public function indexAction()
    {
        $ConfDyn = $this->LoadConfig("default");

        $data['config'] = $ConfDyn;

        $data['UserInfo'] = $this->UserInfo;
        $data['County'] = $this->LoadConfig("default");
        $this->tpl('layouts', 'advertise/dinamic', $data);
    }


}