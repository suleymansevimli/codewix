<?php
  // add class
  include_once './components/Breadcrumb.php';
  include_once './components/NavBar.php';
  include_once './components/Components.php';
  include_once './components/Card.php';
  include_once './components/Button.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Navbar Examples</title>
  </head>
  <body>
  <?php

    $navbar = new NavBar();

    /* 1. JUST AN IMAGE */

    echo "<hr> <h3> Navbar Light </h3> <hr>";

    // navbar light (default)
    echo($navbar->justAnImage('navbar navbar-Light bg-Light','navbar-brand','Example'));

    echo "<hr> <h3> Navbar Dark </h3> <hr>";

    // navbar dark (optional)
    echo($navbar->justAnImage(
        'navbar navbar-dark bg-dark',
        'navbar-brand',
        'Hello World',
        'https://google.com',
        'https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg',
        30,
        30
    ));


    echo "<hr> <h3> Navbar Content </h3> <hr>";
    // navbar with form
    echo($navbar->navBar());

    $bc = new Breadcrumb();
    echo $bc->Breadcrumb(

      [
        'active' => 'Google',
        'https://facebook' => 'Facebook',
        '' => 'Ana Sayfa'
      ]

    );

    $btnGrup = new Components();
    $btnGrup->ButtonGroup();


    $card = new Card();
    echo $card::setCard();

  ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
