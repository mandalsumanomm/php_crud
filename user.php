<?php
  include 'connect.php';
  if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into `crud` (name, email, mobile, password)
    values('$name', '$email', '$mobile', '$password')";
    $result= mysqli_query($con, $sql);
    if($result){
      // echo "Data inserted successfully";
      header('location:display.php');
    }die(mysqli_error($con));
  }
 ?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   

   <div class="container my-5">
     <h1>Crud operation</h1>
        <form method="post">

        <div class="mb-3">
          <label> Name </label>
          <input type="text" class="form-control" placeholder="Enter your name" name="name"> 
        </div>
        
        <div class="mb-3">
          <label> Email </label>
          <input type="email" class="form-control" placeholder="Enter your email" name="email"> 
        </div>

        <div class="mb-3">
          <label> Mobile </label>
          <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile"> 
        </div>

        <div class="mb-3">
          <label> Password </label>
          <input type="text" class="form-control" placeholder="Enter your password" name="password"> 
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
   </div>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>