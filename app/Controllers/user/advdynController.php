<?php
/**
 * WmRush
 * MFS 3.0
 */

namespace App\Controllers\User;

use App\Controllers\UserAccount;
use App\Models\Dynamic;

class advdynController extends UserAccount
{

    private $ModelDyn;


    public function indexAction()
    {
        $ConfDyn = $this->LoadConfig("default");
        $this->ModelDyn = new Dynamic();


        if ($this->input->post("add")) {
            if (!CheckCsrf($this->input->post("csrf"))) {
                SetMessageInfo("Ошибка ввода данных! Повторите попытку.", "danger");
                $this->uri->Redirect($this->uri->Url() . "/adv-din");
            }

            if (
                !$this->input->post("type_surf") or
                !$this->input->post("title") or
                !$this->input->post("description") or
                !$this->input->post("url") or
                !$this->input->post("timer") or
                !$this->input->post("active_window") or
                !$this->input->post("vip") or
                !$this->input->post("count_visit") or
                !$this->input->post("views_ref") or
                !$this->input->post("visit_ip") or
                !$this->input->post("age18")
            ) {
                SetMessageInfo("Все поля обязательны для заполнения", "danger");
                $this->uri->Redirect($this->uri->Url() . "/adv-din");
            }


            $TypeSurf = (int)$this->input->post("type_surf");
            $Title = htmlspecialchars($this->input->post("title"));
            $Description = htmlspecialchars($this->input->post("description"));
            $Url = htmlspecialchars($this->input->post("url"));
            $Timer = (int)$this->input->post("timer");
            $ActiveWindow = (int)$this->input->post("active_window");
            $Vip = (int)$this->input->post("vip");
            $CountVisitsDay = (int)$this->input->post("count_visit");
            $VisitsRef = (int)$this->input->post("views_ref");
            $VisitIp = (int)$this->input->post("visit_ip");
            $Age18 = (int)$this->input->post("age18");


            $this->ModelDyn->AddLinks($TypeSurf, $Title, $Description, $Url);

            SetMessageInfo("Ссылка добавлена", "success");
            $this->uri->Redirect($this->uri->Url() . "/adv-din");


        }

        $data['config'] = $ConfDyn;

        $data['UserInfo'] = $this->UserInfo;
        $data['County'] = $this->LoadConfig("default");
        $this->tplUser('advertise/dinamic', $data);

    }


}