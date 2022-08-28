<?php
class KaruselGenerator{
    public $imgPath;
    public $imgFiles;

    public function __construct($_imgPath){
        $this->imgPath = $_imgPath;
        $this->imgFiles = array_slice(scandir(getcwd().$this->imgPath), 2);
    }
}
