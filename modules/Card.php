<?php 

class Card {

    private $start_tag;
    private $end_tag;

    public function __construct($start='<div class="card>', $end='</div'){
        $this->start_tag = $start;
        $this->end_tag = $end;
    }

    public function setCard(){
        return 
        $this->start_tag.
        "<div class='body'>".
        "hello world"
        ."</div>".
        $this->end_tag;
    }
}


