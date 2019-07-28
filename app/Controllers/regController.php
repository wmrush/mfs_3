<?php

namespace App\Controllers;

use Engine\Core\Controller;
use App\Models\User;
use App\Libs\Mail;

class regController extends Controller
{

    public function indexAction()
    {
        //$config = LoadConfig("default");

        if ($this->session->Check("UserId")) {
            $this->uri->Redirect($this->uri->Url() . "/account");
        }

        if ($this->input->post('login') and $this->input->post("email") and $this->input->post("password") and $this->input->post("repassword") and $this->input->post('csrf')) {


            if ($_SESSION['csrf'] != $this->input->post('csrf')) {
                SetMessageInfo("Ошибка ввода данных! Повторите попытку.", "danger");
                $this->uri->Redirect($this->uri->Url() . "/auth");
            }
            $Login = xss($this->input->post("login"));
            $Email = xss($this->input->post("email"));
            $Pass = $this->input->post("password");
            $RePass = $this->input->post("repassword");


            $User = new User;

            if ($User->ChekLoginOrEmail($Login, 'login') > 0) {
                SetMessageInfo("Данный логин уже занят", "danger");
                $this->uri->Redirect($this->uri->Url() . "/reg");
            }

            if ($User->ChekLoginOrEmail($Email, 'email') > 0) {
                SetMessageInfo("Данный E-Mail уже занят", "danger");
                $this->uri->Redirect($this->uri->Url() . "/reg");
            }

            if ($Pass !== $RePass) {
                SetMessageInfo("Пароли не совпадают", "danger");
                $this->uri->Redirect($this->uri->Url() . "/reg");
            }


            $refId = 0;


            $PinCode = $this->WmRush->GeneratePassword(5);

            $HashLinkActivate = md5(time() . $Email . $Login . mt_rand(10, 99999) . $this->config['salt'] . mt_rand(10, 99999));

            $User->RegisterUser($Login, $Email, $this->WmRush->HashPassword($RePass), $refId, $PinCode, $HashLinkActivate);

            $Mail = new Mail();

            $Text = "Вы успешно зарегистрировались!";
            $Text .= "Ваш Логин: " . $Login . "<br>";
            $Text .= "Ваш E-Mail: " . $Email . "<br>";
            $Text .= "Ваш PIN: " . $PinCode . "<br>";
            $Text .= "Ссылка для активации аккаунта: <a href='http://wmrush-bux.loc/activate-account?actcode=" . $HashLinkActivate . "' target='_blank'>Активировать</a>";

            $Mail->SendEmail($Email, "Регистрация", $Text);


            SetMessageInfo("Вы успешно зарегистрированы. Активируйте свой аккаунт по ссылке отправленной на Ваш E-Mail", "success");
            $this->uri->Redirect($this->uri->Url() . "/reg");
        }


        echo $this->tpl('layouts', 'reg');
    }

}