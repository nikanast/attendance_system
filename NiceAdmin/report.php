<?php
  header("Refresh: 60");
  date_default_timezone_set('Europe/Athens');
  $currentDate = date('d-m-Y');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="SINTAGESY">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <title>Attendance</title>

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
      <a href="" class="logo">CARD <span class="lite">READER</span></a>
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
    <!--header end-->

    <!--sidebar start-->
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
		  
		   <li>
              <a class="" href="users.php">
                          <i class="icon_folder-alt"></i>
                          <span>Users</span>
                      </a>
          </li>
		   <li class="active">
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
          <li>
              <a class="" href="../Controller/test/logout.php">
                          <i class="icon_close_alt2"></i>
                          <span>Logout</span>
                      </a>
          </li>
          
      </div>
    </aside>
       <style>
 @media screen and (min-width: 800px) {
     
    ul.sidebar-menu li a {

       font-size:10px;
     }
  }

     </style>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Report</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">Homepage</a></li>
              <li><i class="fa fa-files-o"></i>Report</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
         <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Choose employee and period
              </header>
              <div class="panel-body">
                <div class="form">
                <form class="form-validate form-horizontal" method="post" accept-charset="utf-8"  action="results.php" >
                 
                  <div class="form-group">
                    <label class="col-sm-2 control-label"><b>Empoloyee</b></label>
                    <div class="col-sm-10">
                     <select name="id" class="form-control m-bot15" required>
					  <option value="">-- Please Choose --</option>
                     <?php
						
			$servername="localhost";
            $dbname="attendance_system";
            $username="root";
            $password="";
			
			

			// Create connection
			//$mysqli->set_charset("utf8");
			$conn = new mysqli($servername, $username, $password, $dbname);
			$conn->set_charset("utf8");
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$sql = "SELECT * FROM users";
			$result = $conn->query($sql);
			
			if(!empty($result))
							{
								while($row = $result->fetch_assoc())
								{
									$id=$row['id'];
									$name=$row['name'];
									
					echo"<option  value='".$id."'>".$id." | ".$name."</option>";
								}
							}
						?>		
                  

                     </select>
                    
                    </div>
                  </div>	
				  
				  <div class="form-group">
                    <label class="col-sm-2 control-label"><b>Period</b></label>
                    <div class="col-sm-10">
                     <select name="period" class="form-control m-bot15" required>
                     <option value="">-- Please Choose --</option>
					 
                     <option value="202101">JANUARY 2021</option>
                     <option value="202102">FEBRUARY 2021</option>
                     <option value="202103">MARCH 2021</option>
                     <option value="202104">APRIL 2021</option>
					 <option value="202105">MAY 2021</option>
					 <option value="202106">JUNE 2021</option>
					 <option value="202107">JULY 2021</option>
					 <option value="202108">AUGUST 2021</option>
					 <option value="202109">SEPTEMBER 2021</option>
					 <option value="202110">OCTOBER 2021</option>
					 <option value="202111">NOVEMBER 2021</option>
					 <option value="202112">DECEMBER 2021</option>
					 
                     </select>
                    
                    </div>
                  </div>	
	             <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Search</button>
                        <button class="btn btn-default" type="button">Cancel</button>
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

  <!-- javascripts -->

  
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
