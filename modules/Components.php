<?php 

class Components{
    function _construct(){
        // ...
    }

    // Button
    public function Button($text="Button",$class="primary",$status=""){
    return " <button type=\"button\" class=\"btn btn-$class\" $status>$text</button> ";
    }


    // Alerts 
    public function Alert($text="A simple primary alert—check it out!",$class="primary"){
        return "
        <div class=\"alert alert-$class\" role=\"alert\">
            $text
        </div>";
    }

    // Dissmisable Alert
    public function dismissAlert(
        $text="<strong>Holy guacamole!</strong> You should check in on some of those fields below.",
        $class="warning",
        $alertType="dismissible",
        $animation="fade show"){
            // add button 
            $btn = $this->Button("<span aria-hidden=\"true\">&times;</span>","close");
        return 
        "
        <div class=\"alert alert-$class alert-$alertType $animation\" role=\"alert\">
            $text
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                $btn
            </button>
        </div>";
    }

    // Badges
    // Head Badges
    public function BadgeHead($head="h6", $badgesType="secondary", $text="NEW"){
        return " <$head> Hello EveryOne <span class=\"badge badge-$badgesType\">$text</span> </$head> ";
    }

    // Button Badges
    public function BadgeButton($text="Notifications", $badgeStyle="light", $badgeText="4"){
       return $btn = $this->Button("$text <span class=\"badge badge-$badgeStyle\">$badgeText</span>","primary");
         
    } 

    function _destruct(){
        //
    }
}


?>