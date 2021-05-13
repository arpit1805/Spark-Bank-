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
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="index.php"><img src="logo1.jpg" height=50; width=100;></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav" style="font-size:1em;">
          <a href="index.php" class="nav-item nav-link active">Home</a>
          <a href="about.php" class="nav-item nav-link">About Us</a>
          <a href="transaction1.php" class="nav-item nav-link">Transactions</a>
          <a href="transaction1.php" class="nav-item nav-link">Notifications</a>
          <a href="transaction1.php" class="nav-item nav-link">Payments</a>
          <a href="transaction1.php" class="nav-item nav-link">Cards</a>
          <a href="covid.php" class="nav-item nav-link">Covid Issues</a>
          <a href="support.html" class="nav-item nav-link">Contact</a>
      </div>
      <div class="form-inline ml-auto">
        <button class="btn btn-outline-light" onclick="sign()"WYSIWYG> Log In </button>
        <button class="btn btn-outline-light" onclick="sign()"WYSIWYG> Register </button>
      </div>
    </div>
</nav>
    </header>
    <li id="search-bar" align="right">
                 <form class="navbar-form navbar-left" role="search">
                     <div class="form-group">
                         <input type="text" class="form-control" placeholder="Search">
                     </div>
                     <div class="form-inline ml-auto">
                         <button type="submit" class="btn btn-outline-light active" onclick="sign()" style="background-color:#ADD8E6;"><h6>Search</h6></button>
                     </div>
                 <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                 </form>
             </li>
 <div class="container-fluid">
            <div class="row intro py-1" style="background-color :  #add8e6 ;">
              <div class="col-sm">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1><b>SPARK BANK</b></h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="bank1.png" class="img-fluid pt-2" style="width:10em;">
              </div>
            </div>
 </div>
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-4 mt-5"><p class="text-center"><img src="location1.png" class="img-fluid pt-2" height=400; width=200;>
     <br><br>
     <button type="button" class="btn btn-primary" onclick="loc()">Branch location</button></p></div>
     <div class="col-md-4 mt-5"><p class="text-center"><img src="indextrans.png" class="img-fluid pt-2" height=550; width=275;>
     <br><br>
     <button type="button" class="btn btn-primary" onclick="loc1()">Transactions</button></p></div>
     <div class="col-md-4 mt-5"><p class="text-center"><img src="History1.png" class="img-fluid pt-2" height=410; width=205>
     <br><br>
     <button type="button" class="btn btn-primary" onclick="loc2()">Recent Transactions</button></p></div>
     <div class="col-md-4 mt-5"><p class="text-center"><img src="covid.jpg" class="img-fluid pt-2" height=720; width=320;>
     <br><br>
     <button type="button" class="btn btn-primary" onclick="loc()"><center>Covid Issues</center></button></p></div>
     <div class="col-md-4 mt-5"><p class="text-center"><img src="donate.png" class="img-fluid pt-2" height=200; width=180;>
     <br><br>
     <button type="button" class="btn btn-primary" onclick="loc()"><center>Donate For Help</center></button></p></div>
     <div class="col-md-4 mt-5"><p class="text-center"><img src="customer1.jpg" class="img-fluid pt-2" height=530; width=265;>
     <br><br>
     <button type="button" class="btn btn-primary" onclick="loc()"><center>Support</center></button></p></div>
     </div>
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
 function loc2(){
   location.href="support.html"
 }
  function sign(){
   location.href="newuser.php"
 }

 </script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
  <footer>
    <hr> <div id="footer"><h6><center>Copyright (c) 2021 Arpit Rastogi</center></h6>
                  </div>
                    </footer>
</html>
