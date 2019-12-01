<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="d-flex justify-content-center">
<?php

require_once "./components/Button.php";
require_once "./Components/Card.php";

$btn = new Button;
$btn->id = 'btn_id btn_id_second';
$btn->className = 'btn btn-outline-primary';
$btn->value = '1';
$btn->label = 'Click Me !';
$btn->otherAttr = [" data-target='modal' data-model='alert'"];
$btn->inlineCss = 'padding:50px;border-radius:50%;margin-top:10%;height:300px; width:300px;';

// only render button
// print $btn->setButton();

$card = new Card;
$card->className="alert alert-warning text-center mt-5";
$card->text = "<b class='' > Hello Card ! </b>";
$card->children = $btn->setButton();
$card->inlineCss = 'border-radius:10%;';
print $card->setCard();

?>

</div>



<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>
    $(".btn").on('click',function(){
        alert('click click');
    })
</script>