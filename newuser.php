<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spark Bank</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
<!--------------------->
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('User created');
                               window.location='transaction1.php';
                     </script>";

    }
  }
?>
<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
<a href="index.php" class="navbar-brand"><img src="logo1.jpg" class="img-fluid pt-2" height=50; width=100;></a>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarCollapse">
  <div class="navbar-nav" style="font-size:1em;">
      <a href="index.php" class="nav-item nav-link">Home</a>
      <a href="about.php" class="nav-item nav-link">About</a>
      <a href="transaction1.php" class="nav-item nav-link">Transactions</a>
      <a href="transaction1.php" class="nav-item nav-link">Notifications</a>
      <a href="transaction1.php" class="nav-item nav-link">Payments</a>
      <a href="transaction1.php" class="nav-item nav-link">Cards</a>
      <a href="transaction1.php" class="nav-item nav-link">Covid Issues</a>
      <a href="transaction1.php" class="nav-item nav-link">Contact</a>
  </div>
  <div class="form-inline ml-auto">
      <button type="submit" class="btn btn-outline-light active" onclick="sign()">Sign-In</button>
  </div>
</div>
</nav>
</header>
<br><br>
<div  style="background-color: #add8e6 ; border-radius:25px;">
    <!--Row with two equal columns-->
    <div class="row">
        <div class="col-sm-12 mt-5"><p class="text-center"><img class="img-fluid" src="user.jpg" style="border-radius: 50%; width:10em;"></p></div>
        <div class="col-sm-12">
          <form class="app-form text-center" method="post">
            <div class="app-form-group mt-2">
              <input class="app-form-control" placeholder="FIRST NAME" type="text" name="first name" required>
            </div>
            <div class="app-form-group mt-2">
              <input class="app-form-control" placeholder="LAST NAME" type="text" name="last name" required>
            </div>
            <div class="app-form-group mt-2">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control mt-2" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button mb-3">
              <input class="app-form-button" type="submit" value="SUBMIT" name="submit"></input>
            </div>
            <div class="app-form-group button mb-3">
              <input class="app-form-button" type="submit" value="CHECK" name="submit"></input>
            </div>
          </form>
        </div>
    </div>
<!---------->
</div>
<script>
function loc(){
  location.href="find_location.php"
}
function loc1(){
  location.href="transaction1.php"
}
function loc2(){
  location.href="history.php"
}
function sign(){
  location.href="newuser.php"
}
</script>
  </body>
</html>
