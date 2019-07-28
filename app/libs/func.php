<?
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
function TextMessageInfo()
{
    if (isset($_SESSION['TextMessage']) and !empty($_SESSION['TextMessage'])) {

        $Mess = $_SESSION['TextMessage'];
        $Type = $_SESSION['TypeMessage'];
        unset($_SESSION['TextMessage'], $_SESSION['TypeMessage']);
        echo '<p><div class="alert alert-' . $Type . '" role="alert">' . $Mess . '</div></p>';
    } else echo '';

}


function SetMessageInfo($text, $type)
{
    $_SESSION['TextMessage'] = $text;
    $_SESSION['TypeMessage'] = $type;
}


function xss($str)
{
    $str = trim($str);
    $str = htmlspecialchars($str);
    return $str;
}

function Amount($Amount)
{
    return number_format($Amount, 2, '.', ',');
}


function Csrf()
{
    global $config;
    $Hash = md5(time() . mt_rand(0, 999999) . mt_rand(0, 999999) . $config['salt']);
    $_SESSION['csrf'] = $Hash;

    return '<input type="hidden" name="csrf" value="' . $Hash . '">';
}

