<?php

include("header.php");
include("config.php");
if(isset($_SESSION['login_user'])){
$username = $_SESSION['login_user'];
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hackathons - Home</title>
    <style>
    	.text_box{
    		display: flex;
    		justify-content: space-between;
    	}
    </style>
  </head>
  <body>

   <a href="addTeamRequest.php"> <button class="btn btn-primary mt-5 ms-5">Post team request</button> </a>

    <?php

    $res = mysqli_query($con,"select * from teamRequest_list");

    while($row =mysqli_fetch_assoc($res)){

    	$team_request_id = $row['team_request_id'];
    	$team_request_desc = $row['team_request_desc'];
    	$team_request_category = $row['team_request_category'];
    	$team_request_skills = $row['team_request_skills'];
    	$team_request_email = $row['team_request_email'];
    	$team_request_username = $row['team_request_username'];
      


      echo' <div class="container w-50 mt-5">

    <div class="card mt-3">
  <h5 class="card-header">Need A Team Member</h5>
  <div class="card-body">
    <p class="card-text">'.nl2br($team_request_desc).'</p>
     <label for="" class="form-label fw-bold">Category :</label>


    <div class="card-text">'.$team_request_category.'</div>
    <br>
     <label for="" class="form-label fw-bold">Posted By :</label>
       <div class="card-text">'.$team_request_username.'</div>    


     <div class="card-text">'.$team_request_email.'</div> 


    <a href="teamRequestHandler.php?team_request_id='.$team_request_id.'" class="btn btn-primary mt-3">View Details</a>

  </div>
</div>

  
</div>';


    }




    ?>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>