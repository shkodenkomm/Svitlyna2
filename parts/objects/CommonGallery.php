<?php

include "Utils.php";
include "GalleryTextProducer.php";


class CommonGallery
{
    public $pageTitle;
    public $textFunction;
    public function CallText(){
        call_user_func($this->textFunction);
    }

    private $previewPath;
    private $gName;

    //**
    // загрузка галереи из файла
    //*/
    public function __construct($initFile, $append="")
    {

        $this->gName = $initFile;
        $this->previewPath = "/$append/$initFile/preview/";
    }

    /**
     * @return string
     */
    public function modalImageView(): string
    {
        return '
          <div id="myModal" class="modal">
              <!-- The Close Button -->
              <span class="close">&times;</span>
              
               <!-- Next and previous buttons -->
               <div class="arrow prev" onclick="plusSlides(-1)">
                      <a>&#10094;</a>
               </div>
              <!-- Modal Content (The Image) -->
              <img class="modal-content" id="img01">
              <!-- Modal Caption (Image Text) -->
              <div id="caption"></div>
               <div class="arrow next" onclick="plusSlides(1)">
                      <a>&#10095;</a>
               </div>              
          </div> ';
    }

    private function renderColumn($cols, $files ): array
    {
        if(is_array($files)){
            foreach ($files as $n) {
                if (!($n == ".jpg")){
                    $cols[]='<img class="preview" src="'.$this->previewPath.$n.'">';
                }
            }
        }
        $cols[]="</div>";

        return $cols;
    }

    public function renderForDesctop()
    {
        $desctopNames1=[];
        $desctopNames2=[];
        $desctopNames3=[];
        $desctopNames4=[];

        $desctopColumn1=['start'=>'<div class="column-v4" id="f1">'];
        $desctopColumn2=['start'=>'<div class="column-v4" id="f2">'];
        $desctopColumn3=['start'=>'<div class="column-v4" id="f3">'];
        $desctopColumn4=['start'=>'<div class="column-v4" id="f4">'];


        $t = csv_to_array($this->gName."/d.csv");

        foreach ($t  as $row){
            $desctopNames1[]=$row["column1"].".jpg";
            $desctopNames2[]=$row["column2"].".jpg";
            $desctopNames3[]=$row["column3"].".jpg";
            $desctopNames4[]=$row["column4"].".jpg";
        }

        echo
            implode($this->renderColumn($desctopColumn1, $desctopNames1)).
            implode($this->renderColumn($desctopColumn2, $desctopNames2)).
            implode($this->renderColumn($desctopColumn3, $desctopNames3)).
            implode($this->renderColumn($desctopColumn4, $desctopNames4));
    }

    public function renderForTablet()
    {
        $n1 = [];
        $n2 = [];

        $tabColumn1=['start'=>'<div class="column-v2" id="t1">'];
        $tabColumn2=['start'=>'<div class="column-v2" id="t2">'];

        $t = csv_to_array($this->gName."/t.csv");

        foreach ($t  as $row){
            $n1[]=$row["column1"].".jpg";
            $n2[]=$row["column2"].".jpg";
        }

        echo
            implode($this->renderColumn($tabColumn1, $n1)).
            implode($this->renderColumn($tabColumn2, $n2));

    }

    public function renderForMobile()
    {
        $n1 = [];

        $column1=['start'=>'<div class="column-v" id="m1">'];

        $t = csv_to_array($this->gName."/m.csv");

        foreach ($t  as $row){
            $n1[]=$row["column1"].".jpg";
        }

        echo
            implode($this->renderColumn($column1, $n1));

    }
}
