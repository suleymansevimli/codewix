<?php 
    require('Components.php');
    class NavBar extends Components {

       function _construct(){
            // on start
        }

        private function dropDown($Dtitle="DropDown",$Dclass = "nav-link dropdown-toggle",$role="button" ){
            return 
            "
                <a class=\"$Dclass\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                   $Dtitle
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            ";
        }

        private function search($text="search...",$action="#"){
            return 
            "
            <form class=\"form-inline my-2 my-lg-0\" action=\"$action\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"$text\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">$text</button>
            </form>
            ";
        }

        private function menuContent(){
            $Ddown = $this->dropDown();
            $btn = parent::BadgeButton();
            return"
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                    $Ddown
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
                    </li>
                    $btn
                </ul>
            </div> ";
        }

        public function toggleNavigation(){
            return 
            "
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            ";
        }

        public function navBar($navClass = "navbar navbar-expand-lg navbar-light bg-light", $navLink="#"){
            
            $searching =  $this->search();
            $MContent = $this->menuContent();
            $togNavigation = $this->toggleNavigation();
            return "
            <nav class=\"$navClass\">
                <a class=\"navbar-brand\" href=\"$navLink\">Navbar</a>
                $togNavigation
                $MContent
                $searching
            </nav>";
        }

        function justAnImage (
            $Nclass="",
            $linkClass="",
            $navbarTitle="",
            $link="#",
            $imageSrc="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg",
            $imageWidth=30,
            $imageHeight=30){
           return 
           "
            <nav class=\"$Nclass\">
                <a class=\"$linkClass\" href=\"#\">
                    <img src=\"$imageSrc\" width=\"$imageWidth\" height=\"$imageHeight\">
                    $navbarTitle
                </a>
            </nav>
            ";
        }


        

        function _destruct(){
            // finish
        }
       
    }

?>