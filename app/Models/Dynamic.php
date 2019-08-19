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

class Dynamic extends Model
{

    public function AddLinks($Type, $Title, $Description, $Url)
    {
        $this->query("INSERT INTO db_Surfing 
        (`sTypeSurf`, `sUserId`, `sLogin`, `sTitle`, `sDescription`, `sUrl`, `sActiveView`, `sCountViewAll`, `sPriceForUser`, `sDateAdd`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [
            $Type, 1, "WmRush", $Title, $Description, $Url, 1, 1000, 0.05, time()
        ]);
    }

}