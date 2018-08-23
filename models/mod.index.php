<?php

include_once '../libs/model.php';

class ModIndex extends Model {

    //Construct means is call the nessesary function that ready to be call.
    public function __construct() {


        parent::__construct();

        //this is where the instruction and list of data that can be pass
        $this->action = (isset($_GET["ACTION"]) ? $_GET["ACTION"] : null);
        $this->getparams = (isset($_GET["GETPARAM"]) ? $_GET["GETPARAM"] : null);
        $this->postparams = (isset($_POST["POSTPARAM"]) ? $_POST["POSTPARAM"] : null);
        $this->type = (isset($_GET["TYPE"]) ? $_GET["TYPE"] : null);

        switch ($this->action){

            //Add more new case statement if you want to add more functions to call

//            Example:
//            case 'saveRegistration':
//                echo $this->saveRegistration($this->postparams);
//            break;
//
//            case 'loadRegistered':
//                echo $this->loadRegistered($this->getparams);
//            break;

            //this case will call the function saveRegistration
            case 'saveRegistration':
                echo $this->saveRegistration($this->postparams);
            break;

            case 'loadRegistered':
                echo $this->loadRegistered($this->getparams);
            break;

        }


        function saveRegistration($params){
            $strSQL = "";//this is where you put your MYSQL QUERY for saving the data:



            $this->db->query($strSQL) or die($this->db->error);//this query function is built in function in php
        }

        function loadRegistered($params){
            $strSQL = "";//this is where you put your MYSQL QUERY to get all the data

            return json_encode($this->db->fetchAll($strSQL));//fetchAll function can be seen in model.php that includes in this class. The purpose of this return statement is to send back the data with readable array for javascript

        }

        //Note: db is a Database Credintials that used for permission to write and read in the Database

    }
}
$ModIndex = new ModIndex();//this will initialize the class itself
