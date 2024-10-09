<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>crud</title>
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a class='text-light text-decoration-none' href="user.php">Add users</a></button>

        <table class="table my-5">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("db.php");
    $sql = "select * from crud";
    $result = mysqli_query($con,$sql);
    if($result){
      $count = 1 ;
       while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
        echo ' <tr>
      <th scope="row">'.$count.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td><button class="btn btn-primary"><a class="text-light text-decoration-none" href="update.php?updateid='.$id.'">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light text-decoration-none">Delete</a></button></td>
    </tr>';
      $count++;
       }
    }
    ?>
    
  </tbody>
</table>
    </div>
    
</body>
</html>