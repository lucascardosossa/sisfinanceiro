<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 20:55
 */

namespace Model;

use Config\Db;

class ContasPagar
{


    private $db;
    private static $table = 'contas_pagar';

    /**
     * ContasPagar constructor.
     */
    public function __construct()
    {
        $this->db = new Db();
    }

    public function getAll()
    {
        $rows = $this->db->select("SELECT * FROM " . self::$table);
        return $rows;
    }

    public function save($params)
    {
        $campos = implode(",", array_keys($params));
        $valores = implode(",", $this->db->quoteValuesArray(array_values($params)));
        $query = "INSERT INTO " . self::$table . " (" . $campos . ") VALUES (" . $valores . ")";
        $result = $this->db->query($query);
        return $result;
    }

    public function update($params, $id)
    {

        $update = array();
        foreach ($params as $field => $value) {
            $value = $this->db->quote($value);
            $update[] = "$field = $value";
        }
        $update = implode(', ', $update);

        $query = "UPDATE  " . self::$table . " SET $update WHERE id = " . $id;
        $result = $this->db->query($query);
        return $result;
    }

    public function delete($id)
    {
        $query = "DELETE FROM " . self::$table . " WHERE id = " . $id;
        $result = $this->db->query($query);
        return $result;
    }


}