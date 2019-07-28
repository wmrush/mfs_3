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

namespace App\Controllers\Admin;


use App\Controllers\AdminAccount;

class indexController extends AdminAccount
{


    public function indexAction()
    {
        $data['PageTitle'] = "Статистика";
        $data['PageDescription'] = "Описание страници";
        $this->tplAdmin('index', $data);
    }


}