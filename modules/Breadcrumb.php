<?php

class Breadcrumb {

    function _construct(){
        require 'Components.php';
    }

    protected function menuItems($pages=[]){
       foreach($pages as $key => $val){
            if($key === "active"){
                echo "
                    <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">$val</li>";
            }else{
            echo "
                <li class=\"breadcrumb-item\"><a href=\"$key\">$val</a></li>";
            }
        }
    }

    public function Breadcrumb($pages=[]){
        $items = $this->menuItems($pages);
        echo $items;
        return
        "
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    $items
                </ol>
            </nav>
        ";


    }

    function _destruct(){
        // ...
    }
}


?>
