<?php
/*                                                                                                                                       

#                                                                                                                                            
#                                                                                                                                            
#  WWWWWWWW                           WWWWWWWW                     RRRRRRRRRRRRRRRRR                                     hhhhhhh             
#  W::::::W                           W::::::W                     R::::::::::::::::R                                    h:::::h             
#  W::::::W                           W::::::W                     R::::::RRRRRR:::::R                                   h:::::h             
#  W::::::W                           W::::::W                     RR:::::R     R:::::R                                  h:::::h             
#   W:::::W           WWWWW           W:::::W mmmmmmm    mmmmmmm     R::::R     R:::::Ruuuuuu    uuuuuu      ssssssssss   h::::h hhhhh       
#    W:::::W         W:::::W         W:::::Wmm:::::::m  m:::::::mm   R::::R     R:::::Ru::::u    u::::u    ss::::::::::s  h::::hh:::::hhh    
#     W:::::W       W:::::::W       W:::::Wm::::::::::mm::::::::::m  R::::RRRRRR:::::R u::::u    u::::u  ss:::::::::::::s h::::::::::::::hh  
#      W:::::W     W:::::::::W     W:::::W m::::::::::::::::::::::m  R:::::::::::::RR  u::::u    u::::u  s::::::ssss:::::sh:::::::hhh::::::h 
#       W:::::W   W:::::W:::::W   W:::::W  m:::::mmm::::::mmm:::::m  R::::RRRRRR:::::R u::::u    u::::u   s:::::s  ssssss h::::::h   h::::::h
#        W:::::W W:::::W W:::::W W:::::W   m::::m   m::::m   m::::m  R::::R     R:::::Ru::::u    u::::u     s::::::s      h:::::h     h:::::h
#         W:::::W:::::W   W:::::W:::::W    m::::m   m::::m   m::::m  R::::R     R:::::Ru::::u    u::::u        s::::::s   h:::::h     h:::::h
#          W:::::::::W     W:::::::::W     m::::m   m::::m   m::::m  R::::R     R:::::Ru:::::uuuu:::::u  ssssss   s:::::s h:::::h     h:::::h
#           W:::::::W       W:::::::W      m::::m   m::::m   m::::mRR:::::R     R:::::Ru:::::::::::::::uus:::::ssss::::::sh:::::h     h:::::h
#            W:::::W         W:::::W       m::::m   m::::m   m::::mR::::::R     R:::::R u:::::::::::::::us::::::::::::::s h:::::h     h:::::h
#             W:::W           W:::W        m::::m   m::::m   m::::mR::::::R     R:::::R  uu::::::::uu:::u s:::::::::::ss  h:::::h     h:::::h
#              WWW             WWW         mmmmmm   mmmmmm   mmmmmmRRRRRRRR     RRRRRRR    uuuuuuuu  uuuu  sssssssssss    hhhhhhh     hhhhhhh

	#Skype: molart111

*/

namespace Engine\Core;


use Engine\Helpers\Session;

use App\Libs\WmRush;

use Engine\Helpers\Uri;


abstract class Controller
{

    public $view;
    public $settings;
    public $input;
    public $session;
    public $uri;
    public $config;
    public $WmRush;


    public function __construct()
    {
        $settings = new Settings();
        $this->settings = $settings->getSettings();
        $this->session = new Session();
        $this->input = new Input();
        $this->view = new Views();
        $this->WmRush = new WmRush();
        $this->uri = new Uri();
        $this->config = $this->LoadConfig("default");
        require ROOT_DIR . '/app/libs/func.php';


    }

    public function tpl($layouts, $block, $data = [])
    {
        $data['InfoSite'] = ["title" => $this->settings["sSiteName"], "desc" => $this->settings["sDesc"]];
        $data['CONTENT'] = $this->view->render($block, $data, true);
        echo $this->view->render($layouts, $data);
    }


    public function LoadConfig($file)
    {
        if (file_exists(ROOT_DIR . "/app/config/" . $file . ".php")) {
            $Config = require ROOT_DIR . "/app/config/" . $file . ".php";
            return $Config;
        }

        return [];

    }


}