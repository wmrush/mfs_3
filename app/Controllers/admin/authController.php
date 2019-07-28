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
use App\Models\Admin;

class authController extends AdminAccount
{


    public function indexAction()
    {
        $data['PageTitle'] = "Авторизация";
        $data['PageDescription'] = "Вход в админку";

        if ($this->input->post('login') and $this->input->post('pass')) {
            if ($_SESSION['csrf'] != $this->input->post('csrf')) {
                SetMessageInfo("Ошибка ввода данных! Повторите попытку.", "danger");
                $this->uri->Redirect($this->uri->Url() . "/admin/auth");
            }

            $Admin = new Admin();


            $Login = $this->input->post("login");
            $Pass = $this->input->post("pass");

            $GetSettings = $Admin->fetch("SELECT `sAdminLogin`, `sAdminPassword` FROM db_Settings WHERE sUid = ?", [1]);

            if ($GetSettings['sAdminLogin'] != $Login) {
                SetMessageInfo("Не верный логин или пароль", "danger");
                $this->uri->Redirect($this->uri->Url() . "/admin/auth");
            }

            if (!$this->WmRush->PasswordVerify($Pass, $GetSettings['sAdminPassword'])) {
                SetMessageInfo("Не верный логин или пароль", "danger");
                $this->uri->Redirect($this->uri->Url() . "/admin/auth");
            }

            $_SESSION['Admin'] = $GetSettings['sAdminLogin'];
            $this->uri->Redirect($this->uri->Url() . "/admin");


        }


        $this->tplAdmin('auth', $data);
    }


}