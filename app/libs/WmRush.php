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

namespace App\Libs;


class WmRush
{


    public function __construct()
    {


    }


    public function HashPassword($Pass)
    {
        return password_hash($Pass, PASSWORD_DEFAULT);
    }

    public function PasswordVerify($Pass, $Hash)
    {
        if (password_verify($Pass, $Hash)) return true;
        return false;
    }


    public function GeneratePassword($len = 5)
    {
        $arr = ['a', 'b', 'c', 'd', 'e', 'f',
            'g', 'h', 'i', 'j', 'k', 'l',
            'm', 'n', 'o', 'p', 'r', 's',
            't', 'u', 'v', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F',
            'G', 'H', 'I', 'J', 'K', 'L',
            'M', 'N', 'O', 'P', 'R', 'S',
            'T', 'U', 'V', 'X', 'Y', 'Z',
            '1', '2', '3', '4', '5', '6',
            '7', '8', '9', '0'];
        $Pass = "";

        for ($i = 0; $i < $len; $i++) {
            $index = rand(0, count($arr) - 1);
            $Pass .= $arr[$index];
        }

        return $Pass;
    }


}