<?php
include("db.php");
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

  

    $query = "Insert into `crud` (name,email,mobile,password) values ('$name','$email','$mobile','$password')";
    
    $result = mysqli_query($con,$query);
    if($result){
        // echo "data save ";
        header('Location:index.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <div class="container my-5 col-lg-6">
    <h1 class="text-center my-5">CRUD Application</h1>
  <form action="user.php" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email1" name="email" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="mobile" class="form-label">Mobile</label>
    <input type="tel" class="form-control" id="mobile" name="mobile" autocomplete="off" >
     <!-- pattern="\+91 - [0-9]{10}" -->
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>
    
   
  </body>
</html>