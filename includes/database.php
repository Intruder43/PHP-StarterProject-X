<?php

error_reporting(1);
include_once '../config/cons.database.php';

class Database extends MySQLi {

    public function __construct() {

        parent::__construct(DBMK_HOST, DBMK_USER, DBMK_PASS);


        mysql_select_db(DBMK_NAME, $this);
        $this->set_charset("utf8");
    }

    public function changeServerUTF8($host, $user, $password) {
        parent::__construct($host, $user, $password);
        parent::set_charset('utf8');
    }

    public function changeServerSJIS($host, $user, $password) {
        parent::__construct($host, $user, $password);
        parent::set_charset("sjis");
    }

    public function fetchAll($str_Query) {

        $arr_Data = array();

        $rs = $this->query($str_Query) or die($this->error . $str_Query . "-" . $str_Query);

        $this->table_fields = $this->fetchFields($rs);

        while ($row = $rs->fetch_array(MYSQLI_ASSOC)) {
            $arr_Data[] = $row;
        }

        //free the resultset
        $rs->close();

        return $arr_Data;
    }
    
    public function fetchFields($result) {
        $fields = array();
        $finfo = $result->fetch_fields();
        foreach ($finfo as $val) {
            $fields[] = $val->name;
        }

        return $fields;
    }
    
     public function execNoQuery($str_cmd) {
        return $this->query($str_cmd);
    }

}
