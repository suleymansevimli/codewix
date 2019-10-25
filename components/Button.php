<?

class Button {
    
    private $btn;
    public $id;
    public $className;
    public $value;
    public $role;
    private $startTag;
    private $endTag;
    private $seperator;
    public $type;
    public $label;
    public $inlineCss;
    public $otherAttr; // other, attributes ex : data-target, data-placement etc. this attr must will be array ! 

    public function __construct(){
        $this->startTag = '<button ';
        $this->seperator='>';
       
    }

    public function setButton(){
        
        $btn = $this->btn;

        // set props
        $btn .= $this->startTag;
        $btn .= " class='".$this->className."'";
        $btn .= " id='".$this->id."'";
        $btn .= " role=$this->role";
        $btn .= " value=$this->value";
        $btn .= " style='".$this->inlineCss."'";

        if(count($this->otherAttr)>1):
            print [
                'status' => 'fail',
                'message' => 'This attr format is invalid'
            ];
        else:
            $btn .= $this->otherAttr[0];
        endif;

        $btn .= $this->seperator;
        $btn .= $this->label;
        $btn .= $this->endTag;

        return $btn;
    }



}