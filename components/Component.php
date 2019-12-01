<?php 

Class Component {


    // attributes
    protected $start_tag;
    protected $end_tag;
    public $text;
    public $children;
    public $className;
    public $inlineCss;
    protected $seperator='>';
    protected $id;
    protected $otherAttr;

    // render items
    protected $state;
    protected $props;


    private function state($state=[]){
        return $state;
    }

    public function __construct($state='default'){
        if(!function_exists('state')){
            return $this->state();
        }
    }



}