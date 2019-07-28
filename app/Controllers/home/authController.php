<?php

namespace App\Controllers\Home;

use Engine\Core\Controller;
use App\Models\User;


class AuthController extends Controller
{


    public function indexAction()
    {
        if ($this->session->Check("UserId")) {
            $this->uri->Redirect($this->uri->Url() . "/account");
        }

        if ($this->input->post("login") and $this->input->post("password") and $this->input->post('csrf')) {

            if ($_SESSION['csrf'] != $this->input->post('csrf')) {
                SetMessageInfo("Ошибка ввода данных! Повторите попытку.", "danger");
                $this->uri->Redirect($this->uri->Url() . "/auth");
            }

            $Login = xss($this->input->post("login"));
            $Pass = $this->input->post("password");

            $User = new User();

            if (!$Info = $User->CheckExistUser($Login)) {
                SetMessageInfo("Не верный логин или пароль", "danger");
                $this->uri->Redirect($this->uri->Url() . "/auth");
            }

            //var_dump($Info); exit;

            if (!$this->WmRush->PasswordVerify($Pass, $Info['uPassword'])) {
                SetMessageInfo("Не верный логин или пароль", "danger");
                $this->uri->Redirect($this->uri->Url() . "/auth");
            }

            $this->session->Set(["UserId" => $Info['uUid'], "Login" => $Info['uLogin']]);

            SetMessageInfo("Добро пожаловать!", "success");
            $this->uri->Redirect($this->uri->Url() . "/account");

        }


        echo $this->Tpl('layouts', 'auth');


    }


}