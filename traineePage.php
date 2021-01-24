<?php include 'data.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
    integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="Trainees.css" media="screen" />

  <title>Trainees</title>

</head>

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
    <?php 
     $id = $_GET['id'];
     echo '<div class="content">';
     echo '<div class="card">';
     echo '<div class="firstinfo"> ';
     echo '<img src "'.$students[$id]['image'].'"/>';
     echo '<div class="profileinfo">';
     echo '<h1>'.$students[$id]['name'].'</h1>';
     echo '<h5>'.$students[$id]['birthday'].'</h5>';

     for($j=0;$j<count($students[$id]['projects']);$j++){
     if($students[$id]['projects'][$j]['is_completed']=='yes' || $students[$id]['projects'][$j]['is_completed']=='yes')
     {
      $project = array($students[$id]['projects'][$j]['project_name']);
      foreach($project as $a => $b){
        echo '<h4> Project Finish :'.$b.'</h4>';

     }
   
      }
     else{
       echo '<h4></h4>';
     }
    }
    echo '<div class="social">';
    echo ' <a href="'.$students[$id]['linkedin account'].'" target="_blank"><i class="fab fa-linkedin"></i></a>';
    echo '<a href="'.$students[$id]['github account'].'" target="_blank"><i class="fab fa-github"></i></a>';
    echo '</div>';
    echo '      </div>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';

    
    
?>


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