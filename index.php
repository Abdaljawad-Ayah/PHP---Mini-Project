<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="index.css" media="screen" />

  <title>Document</title>

</head>
<?php
//  echo '<pre>';
//  print_r($_SERVER);
?>

<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #37d72f;">
    <a class="navbar-brand mr-5 " href="index.php" style="color:white;">Sport In Vein</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToogleDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <?php
           function menuList($name,$link) {
            echo  ' <li class="nav-item active mr-2 "><a class="nav-link text-info" href='.$link.'>'.$name.'<span class="sr-only">(current)</span></a> </li>';
            }
            $name = array("Home", "Att-Report" , "Dashboard", "Gallery");
            $link = array("index.php", "AttReport.php" , "Dash.php", "Gallery.php");
            array_map("menuList", $name,$link);
      ?>

      </ul>
    </div>
  </nav>
  <div class="container">
    <h1 class="text-center p-5">Trainees Page</h1>
    <div class="container-fluid">
      <div class="row">

        <?php
          include "data.php";
          for ($i=0; $i<count($students);$i++){
            $image=array($students[$i]['image']);
            $name=array($students[$i]['name']);
            $birthday=array($students[$i]['birthday']);
            echo '<div class="col-6 col-md-4 col-lg-3 mb-4"><div class="card mx-auto text-center">';

            foreach($image as $a => $b){
              echo '<a href="#url"><img class="card-img-top" src="'.$b.'" alt="Sample Title"></a>';

            }
            foreach($name as $a => $b){
              echo '<div class="card-body">';
              echo '<h5 class="card-title">'.$a.'</h5>';
            }
            foreach($birthday as $a => $b) {
              echo '<p class="card-text">'.$b.'</p>';
              echo '<a href="traineePage.php?id='.$i.'" class="btn prof">Profile </a>';
              echo '</div></div>';

            }
            echo '</div>';
          }
       ?>

      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

</body>

</html>