<?php 

session_start();
if(empty($_SESSION['username'])):
    header('location: regestration/login.php');
endif;

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
  <div class="container"> 

  <form action="php/create.php"
   method="post">

    <h4 class="display-4 text-center">Add User</h4><hr><br>
    <?php if (isset($_GET['error'])) {
    ?>
    <div class="alert alert-danger" role="alert">
  <?php echo $_GET['error']; ?>
</div>
<?php } ?>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="name" 
    class=" mt-2 form-control"
     id="name"
     name="name"
     required
     value = "<?php if(isset($_GET['name'])) 
                       echo ($_GET['name']); ?>"
      placeholder="Enter your name">
  </div>
  <div class=" mt-2 form-group">
    <label for="email">Email</label>
    <input type="email" 
    class=" mt-2 form-control"
     id="email"
     required
     name="email"  
     value = "<?php if(isset($_GET['email'])) 
                       echo ($_GET['email']); ?>"
     placeholder="Enter your email">
     <label for="email">Password</label>
    <input type="password" 
    required
    class=" mt-2 form-control"
     id="password"
     name="password"  
     value = "<?php if(isset($_GET['password'])) 
                       echo ($_GET['password']); ?>"
     placeholder="Enter your password">
  </div>
  
  <button type="submit"
   class="mt-2 btn btn-success"
   name="create">Add User</button>
   <a href="read.php" class="link-primary">View</a>
</form>
  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
</body>
</html>