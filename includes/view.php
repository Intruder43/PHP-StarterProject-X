<?php

error_reporting(E_ALL ^ E_WARNING);

class View extends Template {

//    var $model = null;
//    var $security = null;
//    var $msg = null;

    function __construct($strModuleName = '') {
        //TODO...
        parent::__construct();
        if (!empty($strModuleName)) {
            $this->listModuleLangVariables = $this->getModuleLanguageVariables($strModuleName);
        }
    }

    public function getModuleLanguageVariables($strModuleName) {

        $arrValues = array();

        foreach ($this->getModuleDictionary($strModuleName) as $key => $val) {

            $arrValues[$key] = $this->removeFirstLastCharQuote($val);
            //$$key = $this->removeFirstLastCharQuote($val);
        }
        return $arrValues;
    }

    public function show($strRoot, $strName) {
        foreach ($this->getModuleDictionary($strName) as $key => $val) {
            $key = $this->removeFirstLastCharQuote($val);
        }
        require ($strRoot . '/' . $strName . '.php');
    }

}
