<?php
namespace Engine\Core\Database;

class Database
{

    protected static $pdo;
    protected static $instance;


    /**
     * Undocumented function
     */
    protected function __construct()
    {
        $config = require ROOT_DIR . '/app/config/database.php';

        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['db_name'] . ';charset=' . $config['charset'];

        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ];

        self::$pdo = new \PDO($dsn, $config['user'], $config['password'], $options);
    }


    /**
     * Undocumented function
     *
     * @return void
     */
    public static function instance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }


    /**
     * Undocumented function
     *
     * @param [type] $sql
     * @param array $params
     * @return void
     */
    public static function query($sql, $params = [])
    {
        $query = self::$pdo->prepare($sql);
        $res = $query->execute($params);

        return $res;
    }


    /**
     * Undocumented function
     *
     * @param [type] $sql
     * @param array $params
     * @return void
     */
    public static function fetchAll($sql, $params = [])
    {
        $query = self::$pdo->prepare($sql);
        $res = $query->execute($params);

        if ($res !== false) return $query->fetchAll(\PDO::FETCH_ASSOC);

        return false;
    }


    /**
     * Undocumented function
     *
     * @param [type] $sql
     * @param array $params
     * @return void
     */
    public static function rowCount($sql, $params = [])
    {
        $query = self::$pdo->prepare($sql);
        $query->execute($params);
        return (int)$query->rowCount();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function insertId()
    {
        return self::$pdo->lastInsertId();
    }


    /**
     * Undocumented function
     *
     * @param [type] $sql
     * @param array $params
     * @return void
     */
    public static function fetch($sql, $params = [])
    {
        $query = self::$pdo->prepare($sql);
        $res = $query->execute($params);

        if ($res !== false) return $query->fetch(\PDO::FETCH_LAZY);

        return false;
    }

}

?>
