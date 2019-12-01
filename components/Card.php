<?php 
require_once 'Component.php';

class Card extends Component{

    private $card;

    public function __construct($state=[]){
        $this->start_tag = '<div ';
        $this->end_tag = '</div>'; 
        $this->state($state);
    }

    private function state($state = []){ 
        return $state;
    }

    public function setCard(){
        $card  = $this->card;
        $card .= $this->start_tag;
        $card .= "class=' card ".$this->className."'";
        $card .= " id='".$this->id."'";
        $card .= " style='".$this->inlineCss."'";
        $card .= $this->seperator;
        $card .= $this->text;
        $card .= $this->children;
        $card .= $this->end_tag;
       
        return $card;
    }

}


