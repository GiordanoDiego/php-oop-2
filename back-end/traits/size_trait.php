<?php

trait Size {
	private $width;
	private $heigth;
    
    public function setSize($width, $heigth){
        if(is_numeric($width) and is_numeric($heigth)){
            $this->width = $width;
            $this->heigth = $heigth;
        }
    }
    public function getSize(){
        return $this->width." x ".$this->heigth." cm";
    }
}

?>