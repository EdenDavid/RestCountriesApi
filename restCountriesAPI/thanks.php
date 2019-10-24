<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $link = mysqli_connect("localhost", "root", "", "restCountriesApi") ;
    $sql = "INSERT INTO clients VALUES('','$name','$email','$phone','$state')";
    $result = mysqli_query($link, $sql);
    if ($result && mysqli_affected_rows($link) > 0) {
        $thanks = "We have recived your enquiry,<br>
        and we will respond to you within 24 hours.";
        
    }
      

     
}
?>


<?php if($thanks): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
     
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="images/icon.png">
        <title></title>
           
    
</head>
<body>


<header>
    <img src="images/logo.png" alt="" class="logo" width="300px" height="300px">

</header>
<main>
    <div class="containerThanks">
    <p style="text-align: center; font-size: 2em;"><i class="far fa-check-circle" style="color: green"></i></p><br>

<h1 style=" text-align: center;color: green">Thank you for contacting us!</h1><br>
<p style=" text-align: center;color: green; font-size: 1.5em;"> <?=$thanks;?></p>
      
     
    </div>

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
</body>
</html>
<?php else: header("Location: index.php");?>
<?php endif;?>