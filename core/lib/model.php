<?php
namespace core\lib;

use Medoo\Medoo;

class model extends Medoo
{
    public function __construct()
    {
        $conf=conf::all('db');
        parent::__construct($conf);
    }
}
?>