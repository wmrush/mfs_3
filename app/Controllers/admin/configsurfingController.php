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

/**
 * Class configsurfingController
 * @package App\Controllers\Admin
 */
class configsurfingController extends AdminAccount
{

    public function indexAction()
    {
        $data['PageTitle'] = "Настройки";
        $data['PageDescription'] = "Настройки серфинга";
        if($this->input->post("save_config_admin"))
        {
            $this->WmRush->saveConfigAdmin("surfing", $_POST);
            SetMessageInfo("Настройки обновлены", "success");
            $this->uri->Redirect($this->uri->Url() . '/admin/config-surfing');
        }

        $data['Config'] = $this->LoadConfig("surfing");

        $this->tplAdmin('config_surfing', $data);
    }

}