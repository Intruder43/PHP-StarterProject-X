<?php

class Template extends Language {

    public function setProgramTitle($strProgramTile) {
        $this->str_ProgramTitle = $strProgramTile;
    }

    public function setModuleTitle($strModuleTile) {
        $this->str_ModuleTitle = $strModuleTile;
    }

    public function getModuleTitle() {
        return $this->str_ModuleTitle;
    }
    
    public function getProgramTitle() {
        return $this->str_ProgramTitle;
    }
    
    public function showHeader($header = ''){
        
        foreach($this->getModuleDictionary('header') as $key => $val){
            
            $key = $this->removeFirstLastCharQuote($val);
        }
        require_once($header);
    
    }
    
}
