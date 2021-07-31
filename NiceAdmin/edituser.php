<?php
 
  date_default_timezone_set('Europe/Athens');
  $currentDateTime = date('m-d-Y H:i:s');
  
  if ( ! empty( $_GET['id'] ) ) {
	
    } 
				
$id=$_GET['id'];			

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">


  <title>Τροποποίηση Ασθενή</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Gia to select h epomeni grammi-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="superuseresults.php" class="logo">CARD <span class="lite">READER</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

     
    </header>
    <style>
    .selectpicker {
        width: 350px!important;
        margin: 10px;
    }
    @media screen and (min-width: 800px) {
    .selectpicker {
        width: 850px!important;
        margin: 10px;
    }
}
</style>
    <!--header end-->

    <!--sidebar start-->
        <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li>
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Homepage</span>
                      </a>
          </li>
		  
		  <li >
            <a class="" href="attendance.php">
                          <i class="icon_folder-alt"></i>
                          <span>Attendance</span>
                      </a>
          </li>
        
          <li >
            <a class="" href="breaktime.php">
                          <i class="icon_folder-alt"></i>
                          <span>BreakTime</span>
                      </a>
          </li> 
		  
		   <li class="active">
              <a class="" href="users.php">
                          <i class="icon_folder-alt"></i>
                          <span>Users</span>
                      </a>
          </li>
		  <li>
              <a class="" href="report.php">
                          <i class="icon_folder-alt"></i>
                          <span>Reports</span>
                      </a>
          </li>
		  <li>
              <a class="" href="pending.php">
                          <i class="icon_folder-alt"></i>
                          <span>Pending Users</span>
                      </a>
          </li>
          
      </div>
    </aside>
    <!--sidebar end-->
<style>
 @media screen and (min-width: 800px) {
     .info-box .count {

  margin-top: 20px;

  font-size: 14px;

  font-weight: 500;

     }
    ul.sidebar-menu li a {

       font-size:10px;
     }
  }
   #link {
  
    
    text-align: right!important;
}

     </style>
 <?php
                    $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "attendance_system";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset("utf8");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql_select = "SELECT * from users where id='$id'";
	$result1 = $conn->query($sql_select);

                      

?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Configure User</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Homepage</a></li>
              <li><i class="fa fa-files-o"></i>Configure User</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Configure User
              </header>
              <div class="panel-body">
                <div class="form">
             <form class="form-validate form-horizontal" method="post" accept-charset="utf-8"  action="euser.php" >
                   
	          <div class="form-group">
                    <label class="col-sm-2 control-label"><b>Α/Α</b></label>
                    <div class="col-sm-10">
                      <input type="text" name="id" value="<?php echo $_GET['id']?>" class="form-control round-input" readonly>
                    </div>
                   </div>

                   
                   
                    <div class="form-group">
                    <label class="col-sm-2 control-label"><b>Name</b></label>
                    <div class="col-sm-10">
                      <input type="text" name="name" value=" <?php
				$sql = "SELECT * FROM users WHERE id=$id";
					$result = $conn->query($sql);
			
	
				while($row = $result->fetch_assoc())
				{
					echo
					"{$row['name']}";
				}
			   ?>"class="form-control round-input">
                    </div>
                  </div>
                  
               
                   <div class="form-group">
                    <label class="col-sm-2 control-label"><b>Card Number</b></label>
                    <div class="col-sm-10">
                      <input type="text" name="rfid_uid" value=" <?php
				$sql = "SELECT * FROM users WHERE id=$id";
					$result = $conn->query($sql);

			       
	
				while($row = $result->fetch_assoc())
				{
                                
					echo
					"{$row['rfid_uid']}";
				}
			   ?>"class="form-control round-input">
                    </div>
                  </div>

                 
                   <div class="form-group">
                    <label class="col-sm-2 control-label"><b>Created</b></label>
                    <div class="col-sm-10">
                      <input type="text" name="created" value=" <?php
				$sql = "SELECT * FROM users WHERE id=$id";
					$result = $conn->query($sql);
			
	
				while($row = $result->fetch_assoc())
				{
					echo
					"{$row['created']}";
				}
			   ?>"class="form-control round-input">
                </div>
              </div>
			  </div>	
<br>		  
            <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Configure</button>
                        <input type="button" class="btn btn-default" value="Cancel" onclick="window.location.href='users.php';"/>
                      </div>
                    </div>
            
            </form>
               
        </div>
    </div>
</div>
               
                <!--/modal-->
                </div>
              </div>
            </section>
          </div>
        </div>
        
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          
        </div>
    </div>
  </section>
  <!-- container section end -->
   <script>
      document.getElementById('yourBox').onchange = function() {
    document.getElementById('rdate').disabled = !this.checked;
};

  document.getElementById('yourBox2').onchange = function() {
    document.getElementById('rdate').enabled = !this.checked;
};
   </script>
  <!-- javascripts -->




 <!-- gia to select h epoemenes 3 grammes -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
