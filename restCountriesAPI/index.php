<?php
$countries = "https://restcountries.eu/rest/v2/all";
$ch = curl_init();  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $countries); 
$result = curl_exec($ch);
$arr = json_decode($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="images/icon.png">
        <title></title>
           
    
</head>
<body>


<header>
    <img src="images/logo.png" alt="" class="logo" width="300px" height="300px">
<div class="container">
<div class="row">
<div class="col-12">
<h1 style="color:#fff; font-family: serif;">Looking for the best vacation?<br>The best place to relax and have fun?</h1>
</div>
</div>
</div>
</header>
<main>
    
<!-- carousel  starting here-->
<br>
<br>

<div class="carouselMain" height="400vh">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 carouselImage" src="images/thailand.jpg" alt="First slide" height="400vh">
      <!-- image credit -> Photo by Evan Krause on Unsplash -->
      <div class="carousel-caption d-none d-md-block">
    <h5>thailand</h5>
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carouselImage" src="images/france.jpg" alt="Second slide" height="400vh">
      <!-- image credit -> Photo by anthony delanoi on Unsplash -->
      <div class="carousel-caption d-none d-md-block">
    <h5>France</h5>
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carouselImage" src="images/egypt.jpg" alt="Third slide" height="400vh">
      <!-- image credit -> Photo by les anderson on Unsplash -->
      <div class="carousel-caption d-none d-md-block">
    <h5>Egypt</h5>
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carouselImage" src="images/indonesia.jpg" alt="Forth slide" height="400vh">
      <!-- image credit -> Photo by Oktomi Jaya on Unsplash -->
      <div class="carousel-caption d-none d-md-block">
          
    <h5>Indonesia</h5>
    
  </div>
    </div>
   
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- carousel ends here -->
<br>
<br>

<!-- form starts here -->
<form action="thanks.php" method="POST" autocomplete = "off" novalidate="novalidate">
  <div class="formTrip">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="name" name="name">
    </div>
    <div class="form-group col-md-4">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="email" name="email">
    </div>
    <div class="form-group col-md-4">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
    </div>
    <div class="form-group col-md-4">
      <label for="state">State</label>
      <select id="state" class="form-control" name="state">
        <option selected>Choose...</option>
        <?php foreach($arr as $country):?>
        <option><?= $country->name;?></option>
        <?php endforeach;?>
      </select>
    </div>
    
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-sm btn-block" onclick="check()">SEND</button>
    <div class="forerror" id="forerror" style="text-align: center;">
    <span class="errors" id="errors" style="text-align: center; color: red; font-size: 1.5em;"></span>
    </div>

  
</div>
</form>
<!-- form ends here -->

</main>
<!-- here starts page footer -->
<br>
<br>
<br>
<br>
<br>
<footer class="container">
        <p class="float-right" style="color:#fff;"><a href="#">Back to top</a></p>
        
           
             <p>&copy; 2019 Eden David
      </footer>
   
      
  
<!-- here ends page footer -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
<script src="js/myJs.js"></script>
</body>
</html>
