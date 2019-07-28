<?php
/**
 * Created by PhpStorm.
 * User: molar
 * Date: 26.07.2019
 * Time: 9:26
 */

namespace App\Controllers;


class advdynController extends UserAccount
{


    public function indexAction()
    {
        $ConfDyn = $this->LoadConfig("default");


        $data['UserInfo'] = $this->UserInfo;
        $data['County'] = $this->LoadConfig("default");
        $this->tpl('layouts', 'advertise/dinamic', $data);
    }


}