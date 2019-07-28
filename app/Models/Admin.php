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

namespace App\Models;


use Engine\Core\Model;

class Admin extends Model
{

    public function getSettings()
    {
        return $this->fetch("SELECT * FROM db_Settings WHERE sUid = ?", [1]);
    }

}