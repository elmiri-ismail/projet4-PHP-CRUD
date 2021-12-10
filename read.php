
<?php include "php/read.php";
 
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
  <form action="read.php" method='get'>
  <div class="container"> 
<div class="box"></div>
<div class="d-flex justify-content-around align-items-center w-50">
  <h4 class="display-4 text-center"><?php echo "Welcome " . $_SESSION['username'] ; ?></h4><br>
<a href="index.php" class="btn btn-success">Add User</a></div>
<?php if (isset($_GET['success'])) {
    ?>
    <div class="alert alert-success" role="alert">
  <?php echo $_GET['success']; ?>
</div>
<?php } ?>
<?php if(mysqli_num_rows($result)){ ?>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      
      <?php $i = 0;
          while($rows = mysqli_fetch_assoc($result)){
      $i++;
      ?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$rows['name']?></td>
      <td><?php echo $rows['email']; ?></td>
      <td><a href="update.php?id=<?=$rows['id']?>" class="btn btn-success">Update</a>
      <a href="php/delete.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php }; ?>
  </tbody>
</table>
<?php }; ?>
<div class="link-right">

<input type="submit" name="logout" class="btn btn-primary" value='logout' />
 <?php 
 
            if(isset($_GET['logout'])){
              session_start();
              session_destroy();
              header('location:regestration/login.php');
            }



 ?>
</div>
  </div>


</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
</body>
</html>