<?

namespace App\Models;

use Engine\Core\Model;

class User extends Model
{

    public $table = "db_Users";

    public function RegisterUser($Login, $Email, $Pass, $refId, $PinCode, $HashEmail)
    {
        $this->query("INSERT INTO db_Users (uLogin, uEmail, uPassword, uPinCode, uRefId, uActivateAccount) VALUES (?, ?, ?, ?, ?, ?)", [$Login, $Email, $Pass, $PinCode, $refId, $HashEmail]);
        return $this->insertId();
    }


    public function ChekLoginOrEmail($Login, $Type = "login")
    {
        if($Type == "login")
            $Query = $this->rowCount("SELECT uUid FROM db_Users WHERE `uLogin` = ?", [$Login]);
        else
            $Query = $this->rowCount("SELECT uUid FROM db_Users WHERE `uEmail` = ?", [$Login]);
        return $Query;
    }



    public function CheckExistUser($Login)
    {
        $Query = $this->rowCount("SELECT uUid FROM db_Users WHERE uLogin = ?", [$Login]);
        if($Query == 1)
            return $this->fetch("SELECT * FROM db_Users WHERE uLogin = ?", [$Login]);

        return false;
    }


    public function GetUserInfo($UserId)
    {
        return $this->fetch("SELECT * FROM db_Users WHERE uUid = ?", [$UserId]);
    }

}