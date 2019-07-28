<?php

namespace Engine\Core;

use Engine\Core\Database\Database;

class Settings
{

    private $db;

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getSettings()
    {

        $this->db = Database::instance();
        $Query = $this->db->fetch("SELECT * FROM db_Settings");
        return $Query;

    }


}