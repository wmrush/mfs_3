<?php
/**
 * Created by WmRush.
 * Product: MFS 3.0
 * Skype: molart111
 * Telegram: @WmRush
 * E-Mail: molart1@yandex.ru
 * https://sfb.su
 * https://wmrush.info
 */

namespace App\Controllers;


use Engine\Core\Controller;

class AdminAccount extends Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->Check("Admin")) {
            if ($this->uri->Segment(1) != 'auth')
                $this->uri->Redirect($this->uri->Url() . "/admin/auth");
        }

    }


}