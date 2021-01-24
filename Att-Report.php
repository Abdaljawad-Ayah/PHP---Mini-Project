<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Att-Report</title>
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
    <h1 class="text-center text-light p-5">Report Page</h1>
    <div class="container">
      <table class="table">
        <thead>
          <tr class="table-light">
            <th scope="col">Student Name</th>
            <th scope="col">Check In</th>
            <th scope="col">Check Out</th>
            <th scope="col">Hours Work</th>
          </tr>
        </thead>
        <tbody>
          <?php 
      for($i=0;$i<count($students);$i++){

        for($j=0;$j<count($students[$i]['attendance']);$j++){
          $name=array($students[$i]['name']);
          $check_in=array($students[$i]['attendance'][$j]['check_in']);
          $check_out=array($students[$i]['attendance'][$j]['check_out']);
          

          $chechIn=$students[$i]['attendance'][$j]['check_in'];
          $chechOut=$students[$i]['attendance'][$j]['check_out'];
          $hourdiff = round((strtotime($chechOut) - strtotime($chechIn))/3600, 1);
    

          if($hourdiff>=8)
          {
            echo '<tr class="table-success">';
            foreach($name  as $a  => $b){
              echo '<th scope="row">'.$b.'</th>';
               } 
          }
        }
      }
    
?>

        </tbody>
      </table>
    </div>
  </div>
</body>

</html>