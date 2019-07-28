<?php

namespace Engine\Core;

use Engine\Core\Database\Database;

abstract class Model
{


    protected $db;
    protected $table;


    /**
     * Undocumented function
     */
    public function __construct()
    {
        $this->db = Database::instance();
    }

    /**
     * Undocumented function
     *
     * @param [type] $sql
     * @param array $params
     * @return void
     */
    public function query($sql, $params = [])
    {
        return $this->db->query($sql, $params);
    }

    /**
     * Undocumented function
     *
     * @param [type] $sql
     * @param array $params
     * @return void
     */
    public function fetch($sql, $params = [])
    {
        return $this->db->fetch($sql, $params);
    }


    /**
     * Undocumented function
     *
     * @param [type] $sql
     * @param array $params
     * @return void
     */
    public function rowCount($sql, $params = [])
    {
        return $this->db->rowCount($sql, $params);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function insertId()
    {
        return $this->db->insertId();
    }


}