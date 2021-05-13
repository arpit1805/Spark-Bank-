<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spark Bank</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .bs-example{
    	margin: 2.5em;
    }
</style>
</head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="#" class="navbar-brand"><img src="logo1.jpg" class="img-fluid pt-2"  height=40; width=100;></a>
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
          <button type="submit" class="btn btn-outline-light" onclick="sign()">Sign-In</button>
      </div>
    </div>
</nav>
    </header>
      <div class="container-fluid">
         <!-- Introduction section -->
               <div class="row intro py-1" style="background-color :  #add8e6 ;">
                 <div class="col-sm-12 col-md">
                   <div class="heading text-center my-5">
                     <h1>                Find near Branch</h1>
                     <h1><b>                   BANK</b></h1>
                   </div>
                 </div>
                 <div class="col-sm-12 col-md img text-center">
                   <img src="maps.jpg" class="img-fluid pt-2" style="width:15em;">
                 </div>
               </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="table-responsive-sm">
          <table class="table">
          <thead class="thead-dark">
              <tr>
                  <th>Branch</th>
                  <th>Location</th>
                  <th>State</th>
                  <th>Branch Manager</th>
                  <th>Branch Email</th>
                  <th>Toll free number</th>
              </tr>
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
          </thead>
          <tbody>
            <tr>
                <td>Lucknow</td>
                <td>Sector 27, opp.Sahara mall,Indra nagar,Lucknow</td>
                <td>Uttar Pradesh</td>
                <td>Rajesh Vishvkarma</td>
                <td>Sparklko2563@spark.in</td>
                <td>03201</td>
            </tr>
              <tr>
                  <td>Vanaras</td>
                  <td>Tejas-road, jain Mandir,Vanaras</td>
                  <td>Uttar Pradesh</td>
                  <td>Aman Singh</td>
                  <td>SparkVns@spaark.in</td>
                  <td>03202</td>
              </tr>
              <tr>
                  <td>Bhopal</td>
                  <td>741/a, Near vidhan shabha,Bhopal</td>
                  <td>Madhya Pradesh</td>
                  <td>Dheeresh Maurya</td>
                  <td>Bhl420@spark.in</td>
                  <td>03203</td>
              </tr>
              <tr>
                  <td>Bangalore</td>
                  <td> 5, Charlescampbellrd,coxtown,blr-05, Cox Town,Bangalore</td>
                  <td>karnataka</td>
                  <td>Satyam Yadav</td>
                  <td>bng4999@spark.in</td>
                  <td>03204</td>
              </tr>
              <tr>
                  <td>New Hyderabad</td>
                  <td>4756, nindal Pura, New Hyderabad</td>
                  <td>Telangana</td>
                  <td>Jayasari</td>
                  <td>hyd1425@spark.in</td>
                  <td>03205</td>
              </tr>
              <tr>
                  <td>Delhi</td>
                  <td> C-1/13, Rajnigandha Building, Near Liberty Cinema, New Rohtak Road, Delhi</td>
                  <td>Delhi</td>
                  <td>Chitvan Singh</td>
                  <td>Delhi712@spark.in</td>
                  <td>03206</td>
              </tr>
              <tr>
                  <td>Vadodara</td>
                  <td>Sajanipur New Road, Vadodara</td>
                  <td>Gujarat</td>
                  <td>Parohah gupta</td>
                  <td>vda999@spark.in</td>
                  <td>03207</td>
              </tr>
              <tr>
                  <td>Kolkata</td>
                  <td>24 pargana Street, Havrah, Kolkata</td>
                  <td>West bengal</td>
                  <td>Ansh Firohn</td>
                  <td>Klata4888@spark.in</td>
                  <td>03208</td>
              </tr>
              <tr>
                  <td>Jalandar</td>
                  <td>Lovely Professional College,Paghvara,Jalandar</td>
                  <td>Punjab</td>
                  <td>Jasan Preet Singh</td>
                  <td>Jlnd714@spark.in</td>
                  <td>03209</td>
              </tr>
              <tr>
                  <td>Chennai</td>
                  <td>75a,Jain Pebble Thoripakkam,Chennai</td>
                  <td>Tamil Nadu</td>
                  <td>Venky Chaitanya</td>
                  <td>Ch234@spark.in</td>
                  <td>03210</td>
              </tr>
              <tr>
                  <td>Chennai</td>
                  <td>75a, East Ramapuram,Chennai</td>
                  <td>Tamil Nadu</td>
                  <td>JVK Chaitanya</td>
                  <td>jvkatspark@gmail.com</td>
                  <td>03211</td>
              </tr>
          </tbody>
      </table>
      </div>
        </div>
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
