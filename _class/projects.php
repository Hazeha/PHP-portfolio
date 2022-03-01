<?php
require_once "links.php";

class Project extends Link{
    private $lang;
    private $date;
    function __construct($_title_dk, $_title_en, $_url, $_lang, $_date){
        $this->title_dk = $_title_dk;
        $this->title_en = $_title_en;
        $this->url = $_url;
        $this->lang = $_lang;
        $this->date = $_date;
        $this->__construct();
    }

    public function getLang(){
        return $this->lang;
    }
    public function getDate(){
        return $this->date;
    }
}
