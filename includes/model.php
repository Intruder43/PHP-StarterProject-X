<?php

include_once "database.php";

abstract class Model {

    protected $db = null;

    public function __construct() {
        //instanciate database  uses
        $this->db = new Database();
    }

    public function convertArraySJISToUTF8($arrValue) {

        $retValue = mb_convert_variables("UTF-8", "SJIS-win", $arrValue);

        return $retValue;
    }

    public function convertArrayUTF8ToSJIS($arrValue) {

        $retValue = mb_convert_variables("SJIS-win", "UTF-8", $arrValue);

        return $retValue;
    }
    
  
    
}
