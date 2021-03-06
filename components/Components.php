<?php

class Components{
    function _construct(){
        // ...
    }

    // Button
    public function Button($text="Button",$class="primary",$type="button",$status=""){
    return " <button type=\"$type\" class=\"btn btn-$class\" $status>$text</button> ";
    }
    
    // Button Group
    public function ButtonGroup($names=[
        'btn1'=>[
          'type'=>'button',
          'class'=>'btn btn-secondary',
          'name'=>'Button1'
        ],
        'btn2' => [
            'type' => 'button',
            'class' => 'btn btn-primary',
            'name' => 'Button2'
        ],
        'btn3' => [
            'type' => 'button',
            'class' => 'btn btn-primary',
            'name' => 'Button3'
        ]
      ])
    {
        foreach ($names as $name) {
          if (is_array($name)) {
            $type = $name['type'];
            $class = $name['class'];
            $name = $name['name'];

            echo "<button type=\"$type\" class=\"$class\" >$name</button>";
          }else{
            echo "not ok";
          }
        }

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
        "<div class=\"alert alert-$class alert-$alertType $animation\" role=\"alert\">
            $text
            $btn
         </div>";
    }

    /* Badges */
    // Head Badges
    public function BadgeHead($head="h6", $badgesType="secondary", $text="NEW"){
        return " <$head> Hello EveryOne <span class=\"badge badge-$badgesType\">$text</span> </$head> ";
    }

    // Button Badges
    public function BadgeButton($text="Notifications", $badgeStyle="light", $badgeText="4"){
       return $btn = $this->Button("$text <span class=\"badge badge-$badgeStyle\">$badgeText</span>","primary");
    }

    // Contextual Badges
    public function BadgeContext($badgeText="Example Text", $badgeStyle="primary"){
        return "<span class=\"badge badge-$badgeStyle\"> $badgeText </span> ";
    }

    // Pill Badges
    public function PillBadges($badgeText="Text", $badgeStyle="primary"){
        return "<span class=\"badge badge-pill badge-$badgeStyle\"> $badgeText </span>";
    }

    // Link Badges
    public function LinkBadge($badgeText="Text", $badgeLink="#", $badgeStyle="primary"){
        return "<a href=\"$badgeLink\" class=\"badge badge-$badgeStyle\"> $badgeText </a>";
    }


    function _destruct(){
        //
    }
}


?>
