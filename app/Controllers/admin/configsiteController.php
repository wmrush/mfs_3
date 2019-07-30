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

namespace App\Controllers\admin;


use App\Controllers\AdminAccount;

/**
 * Class configsiteController
 * @package App\Controllers\admin
 */
class configsiteController extends AdminAccount
{

    public function indexAction()
    {
        $data['PageTitle'] = "Настройки";
        $data['PageDescription'] = "Настройки серфинга";


        if ($this->input->post("save_config_admin") and $this->input->post("save_config_admin") == 1) {
            $this->WmRush->saveConfigAdmin("site", $_POST);
            SetMessageInfo("Настройки обновлены", "success");
            $this->uri->Redirect($this->uri->Url() . '/admin/config-site');
        }

        if ($this->input->post("save_config_admin") and $this->input->post("save_config_admin") == 2) {
            $this->WmRush->saveConfigAdmin("email", $_POST);
            SetMessageInfo("Настройки обновлены", "success");
            $this->uri->Redirect($this->uri->Url() . '/admin/config-site');
        }

        $data['Config'] = $this->LoadConfig("site");
        $data['ConfigEmail'] = $this->LoadConfig("email");

        $this->tplAdmin('config_site', $data);
    }


}