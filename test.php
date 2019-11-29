<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
<?php

require_once "./components/Button.php";

$btn = new Button;
$btn->id = 'btn_id btn_id_second';
$btn->className = 'btn btn-outline-danger';
$btn->value = '1';
$btn->label = 'Click Me !';
$btn->otherAttr = [" data-target='modal' data-model='alert'"];
$btn->inlineCss = 'padding:50px;border-radius:50%;margin-top:10%;';
// render button
print $btn->setButton();

?>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>
    $(".btn").on('click',function(){
        alert('click click');
    })
</script>