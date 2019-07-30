<?

namespace App\Controllers\Home;


use Engine\Core\Controller;
use App\Models\User;
use Engine\Core\Views;
use Engine\Core\Settings;


class indexController extends Controller
{

    public $view;

    public function __construct()
    {
        parent::__construct();
        $this->view = new Views();
    }

    /**
     * Undocumented function
     *
     * @param [type] $aaa
     * @return void
     */
    public function indexAction()
    {
        $data['UserInfo'] = ["uUid" => 1, "Login" => "WmRush"];
        $this->tplUser('layouts', 'test', $data);
        // $User = new User();
        // $q = $User->query("INSERT INTO db_Users (uLogin, uEmail, uPassword) VALUES ('WmRush1', 'ma@aa.ru', 'aaaa')");
        //var_dump($User->insertId());


    }
}