<?php
namespace app\models;

use core\lib\model;

class nameModel extends model
{
    public static $table;

    public function lists(){
        $data = $this->select('name', '*');
        return $data;
    }
}
?>