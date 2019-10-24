<?php
 $link = mysqli_connect("localhost", "root", "", "restCountriesApi") ;
$sql = "SELECT * FROM `clients`";
$result = mysqli_query($link, $sql);
if ($result && mysqli_num_rows($result) > 0){
   
        $data = [];
            while($row = mysqli_fetch_assoc($result)){
                    $data[] = $row;
            }
        }
?>



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
    
<table class="table table-bordered">
  <thead>
    <tr class="table-secondary">
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>

      <th scope="col">Phone</th>
      <th scope="col">Destination</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($data as $client):?>
    <tr class="table-secondary">

      <th scope="row"></th>
      <td><?= $client['name'];?></td>
      <td><?= $client['email'];?></td>
      <td><?= $client['phone'];?></td>
      <td><?= $client['state'];?></td>
      
    </tr>
<?php endforeach;?>
    
  </tbody>
</table>

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