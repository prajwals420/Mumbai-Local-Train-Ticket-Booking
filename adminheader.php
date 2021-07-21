
<head>
  <title>M-Ticket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .navbar
   {

    margin-bottom: 50px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    border: 0;
    font-size: 23px !important;
    letter-spacing: 2px;
    opacity: 2;
    padding: 10px;
    }

   .umbotron {
      margin-bottom: 0;
    }
   
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

  .navvvvvvbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #FFC107;
    border: 0;
    font-size: 30px !important;
    letter-spacing: 4px;
    text-align: left;
    padding: 17px;
    color:black;
   font-weight: 40000;


  }


  }
  </style>
</head>

<nav  class="navvvvvvbar navvvvvvbar-default navvvvvvbar-fixed-top">
      <div  class="  navvvvvvbar-brand navvvvvvbar-center"><b>&nbsp&nbsp&nbsp<mark>M-TICKET</mark></b>
    

  

</nav>

    </div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

     </div>
    <div class="collapse navbar-collapse " id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
        Admin : <?php  echo " ". $_SESSION['name'] ."" ?> &nbsp<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <!--<li><a href="myprofile.php"><span class="glyphicon glyphicon-user  "></span> My Profile</a></li>-->
    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out  "></span> Logout</a></li>
              </div>

        </ul>
      </ul>
    </div>
  </div>
</nav>
</html>

