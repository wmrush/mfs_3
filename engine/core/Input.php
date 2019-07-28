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

class Input
{
    public $posts = [];
    public $gets = [];
    public $cookie = [];
    public $files = [];
    public $server = [];
    public $request = [];

    /**
     * Undocumented function
     */
    public function __construct()
    {

        $this->posts = $_POST;
        $this->gets = $_GET;
        $this->cookie = $_COOKIE;
        $this->files = $_FILES;
        $this->request = $_REQUEST;

    }

    public function post($key)
    {
        return (isset($this->posts[$key])) ? $this->posts[$key] : false;
    }

    public function get($key)
    {
        return (isset($this->gets[$key])) ? $this->gets[$key] : false;
    }


}