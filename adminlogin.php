
    <?php
    $flag=1;
    if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'connection.php';
    $u=$_POST["adminname"];
    $p=$_POST["password"];
    $q1="SELECT * FROM `admin` WHERE  `password` LIKE '$p' AND `name` LIKE '$u'";
    $r1=mysqli_query($connection,$q1);

    if($result=mysqli_fetch_array($r1))
    {

      session_start();
      $_SESSION['login_user']="$u";
      header("Location:home.php") ;

    }else {

$flag=0;
    //  header("Location:adminlogin.html") ;

    }
  }
     ?>
     <!DOCTYPE HTML>
     <html>
     	<head>
     	<meta charset="utf-8">
     	<meta http-equiv="X-UA-Compatible" content="IE=edge">
     	<title>ABC Online Examination</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
     	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
     	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
     	<meta name="author" content="GetTemplates.co" />

       	<!-- Facebook and Twitter integration -->
     	<meta property="og:title" content=""/>
     	<meta property="og:image" content=""/>
     	<meta property="og:url" content=""/>
     	<meta property="og:site_name" content=""/>
     	<meta property="og:description" content=""/>
     	<meta name="twitter:title" content="" />
     	<meta name="twitter:image" content="" />
     	<meta name="twitter:url" content="" />
     	<meta name="twitter:card" content="" />

     	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

     	<!-- Animate.css -->
     	<link rel="stylesheet" href="css/animate.css">
     	<!-- Icomoon Icon Fonts-->
     	<link rel="stylesheet" href="css/icomoon.css">
     	<!-- Themify Icons-->
     	<link rel="stylesheet" href="css/themify-icons.css">
     	<!-- Bootstrap  -->
     	<link rel="stylesheet" href="css/bootstrap.css">

     	<!-- Magnific Popup -->
     	<link rel="stylesheet" href="css/magnific-popup.css">

     	<!-- Magnific Popup -->
     	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

     	<!-- Owl Carousel  -->
     	<link rel="stylesheet" href="css/owl.carousel.min.css">
     	<link rel="stylesheet" href="css/owl.theme.default.min.css">

     	<!-- Theme style  -->
     	<link rel="stylesheet" href="css/style.css">

     	<!-- Modernizr JS -->
     	<script src="js/modernizr-2.6.2.min.js"></script>
     	<!-- FOR IE9 below -->
     	<!--[if lt IE 9]>
     	<script src="js/respond.min.js"></script>
     	<![endif]-->

     	</head>
     	<body>

     	<div class="gtco-loader"></div>

     	<div id="page">


     	<!-- <div class="page-inner"> -->
     	<nav class="gtco-nav" role="navigation">
     		<div class="gtco-container">

     			<div class="row">
     				<div class="col-sm-4 col-xs-12">
     					<div id="gtco-logo"><a href="adminlogin.html">Be <em>.</em></a></div>
     				</div>

     			</div>

     		</div>
     	</nav>
     	<div id="gtco-subscribe">
     		<div class="gtco-container">
     			<div class="row animate-box">
     				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
     					<h2>Login</h2>
     					<p>The secret of getting ahead is getting started.</p>
     				</div>
     			</div>


     			<div class="row animate-box">
     				<div class="col-md-8 col-md-offset-2">
              <?php
                    if($flag==0){
                      echo '<div class="row animate-box">
                 				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
               			     <h5>*login failed</h5>
                         </div></div>';
                    }
                     ?>
     					<form method ="POST" action="adminlogin.php"class="form-inline">
     						<div class="col-md-6 col-sm-6">
     							<div class="form-group">
     								<label for="email" class="sr-only">Email</label>
     								<input type="email" class="form-control" name="adminname" id="email" placeholder="Admin Name"><br><br>
                    <input type="password" class="form-control" id="email"name="password" placeholder="Password">
             <div class="col-md-6 col-sm-6">
               <br><button type="submit" class="btn btn-default btn-block">Login</button>
             </div>

     							</div>

     					</form>
     				</div>
     			</div>
     		</div>
     	</div>


       	<!-- jQuery -->
       	<script src="js/jquery.min.js"></script>
       	<!-- jQuery Easing -->
       	<script src="js/jquery.easing.1.3.js"></script>
       	<!-- Bootstrap -->
       	<script src="js/bootstrap.min.js"></script>
       	<!-- Waypoints -->
       	<script src="js/jquery.waypoints.min.js"></script>
       	<!-- Carousel -->
       	<script src="js/owl.carousel.min.js"></script>
       	<!-- countTo -->
       	<script src="js/jquery.countTo.js"></script>

       	<!-- Stellar Parallax -->
       	<script src="js/jquery.stellar.min.js"></script>

       	<!-- Magnific Popup -->
       	<script src="js/jquery.magnific-popup.min.js"></script>
       	<script src="js/magnific-popup-options.js"></script>

       	<!-- Datepicker -->
       	<script src="js/bootstrap-datepicker.min.js"></script>


       	<!-- Main -->
       	<script src="js/main.js"></script>

       	</body>
       </html>
