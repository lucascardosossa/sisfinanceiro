<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 21/07/17
 * Time: 20:24
 */

namespace Config;

class Db
{

    protected static $connection;

    /**
     * Fetch rows from the database (SELECT query)
     *
     * @param $query The query string
     * @return bool False on failure / array Database rows on success
     */
    public function select($query)
    {
        $rows = array();
        $result = $this->query($query);
        if ($result === false) {
            return false;
        }
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    /**
     * Query the database
     *
     * @param $query The query string
     * @return mixed The result of the mysqli::query() function
     */
    public function query($query)
    {
        // Connect to the database
        $connection = $this->connect();

        // Query the database
        $result = $connection->query($query);

        return $result;
    }

    /**
     * Connect to the database
     *
     * @return bool false on failure / mysqli MySQLi object instance on success
     */
    public function connect()
    {

        if (!isset(self::$connection)) {

            $config = parse_ini_file('config.ini');
            self::$connection = new \mysqli('localhost', $config['username'], $config['password'], $config['dbname']);
        }


        if (self::$connection === false) {
            return false;
        }
        return self::$connection;
    }

    /**
     * Fetch the last error from the database
     *
     * @return string Database error message
     */
    public function error()
    {
        $connection = $this->connect();
        return $connection->error;
    }

    /**
     * Quote and escape value for use in a database query
     *
     * @param string $value The value to be quoted and escaped
     * @return string The quoted and escaped string
     */
    public function quote($value)
    {
        $connection = $this->connect();
        return "'" . $connection->real_escape_string($value) . "'";
    }

    public function quoteValuesArray($value)
    {
        $connection = $this->connect();
        $arrayQuoted = array();
        foreach ($value as $item) {
            $arrayQuoted[] = "'" . $connection->real_escape_string($item) . "'";
        }
        return $arrayQuoted;
    }
}