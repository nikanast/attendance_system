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
  
  <link rel="shortcut icon" href="img/favicon.png">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <title>Users</title>

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

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" style="width: 33.2px; height: 33.2px;" src="img/user.png">
                            </span>
                            <span class="username">
  </span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                <a href="../Controller/test/logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
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
		  
		   <li >
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
		  <li class="active">
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
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Card Reader</h3>
            
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">Homepage</a></li>
              <li><i class="fa fa-table"></i>Users</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        
        
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              Users: <span style="color:red;"><?php
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

                    $sql_select2 = "SELECT COUNT(id) FROM users WHERE name=''";
                    $result2 = $conn->query($sql_select2);
                    
                    echo '<span style="color:red;font-size: 150%"> </span>';
                    $row = $result2->fetch_row();
                    echo $row[0];
                    
                    
                ?>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!-- <button class="btn btn-danger hidden-bin" onclick="myFunction2()"><span class="glyphicon glyphicon-bin" aria-hidden="true"></span> Διαγραφή</button>-->
                <script>
                function myFunction() {
                var prtContent = document.getElementById("print1");
                var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
                WinPrint.document.write(prtContent.innerHTML);
                WinPrint.document.close();
                WinPrint.focus();
                WinPrint.print();
                WinPrint.close();
                }
                function myFunction2() {
                window.location = "delete.php";
                }
                </script>
              </header>
               <br>
            <input type="text" id="search" placeholder="Search..." title="Type in a name">
              <div id="print1">
              <table id="recipes" class="table table-striped table-advance table-hover" >
                <tbody>
                  <tr>
                    <th style="text-align: center;"><i class=""></i>A/A</th>
                    <th style="text-align: center;"><i class=""></i>Card Number</th>
                    <th style="text-align: center;"><i class=""></i>Full Name</th>                 
                    <th style="text-align: center;"><i class=""></i>Created</th>  
                    <th style="text-align: center;"><i class=""></i>Configure Name</th>  
                  </tr>
                  <tr>
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

	$sql_select = "SELECT * from users WHERE name=''";
	$result1 = $conn->query($sql_select);

    
	$check=0;
	while($row = $result1->fetch_assoc())
						{
			
                        $id=$row['id'];			
                        $rfid_uid=$row['rfid_uid'];
                        
                        $name=$row['name'];
                        $created=$row['created'];
                        
 

							echo
							"<tr>
<td align=center style='width: 20%; vertical-align: middle;' width='20%';>{$row['id']}</td>    
<td align=center style='width: 20%; vertical-align: middle;' width='20%';>{$row['rfid_uid']}</td>                            
<td align=center style='width: 20%; vertical-align: middle;' width='20%';>{$row['name']}</td>
<td align=center style='width: 20%; vertical-align: middle;' width='20%';>{$row['created']}</td>
<td align=center method=post><input type=button class=button1 onclick=update('$id') value=✎></td>

							</tr>\n";
						}

           
            
                  ?>

                  
                    
                </tbody>
              </table>

    

             <style>
#search {
  background-image: url('searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}					
			
	
.button1 {
	/* border: 1px solid #3079ed; */
	font-family: calibri;
  	border: 0px;
  	color: #fff;
	width: 40px;
	margin-top: 5px;
	padding-top: 2px;
	padding-bottom: 2px;
	border-radius: 5px;
  	text-shadow: 0 1px rgba(0,0,0,0.1); 
	font-size:15px;
	font-weight: bold;
  	background-color: #394a59;
  	/* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.button1:hover {
	/* border: 1px solid #2f5bb7; */
	border: 0px;
	cursor: pointer;
  	text-shadow: 0 1px rgba(0,0,0,0.3);
  	background-color: #860000;
  	/* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}
			
#recipes {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#recipes td, #recipes th {
  border: 1px solid #ddd;
  padding: 2px;
}

#recipes tr:nth-child(even){background-color: #f2f2f2;}

#recipes tr:hover {background-color: #ddd;}

#recipes th {
  padding-top: 10px;
  padding-bottom: 0px;
  text-align: left;
  background-color: #394a59;
  color: white;

}
</style>
            </section>
          </div>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- container section end -->
  <!-- javascripts -->
    <script>
$("#search").keyup(function () {
    var value = this.value.toLowerCase().trim();

    $("table tr").each(function (index) {
        if (!index) return;
        $(this).find("td").each(function () {
            var id = $(this).text().toLowerCase().trim();
            var not_found = (id.indexOf(value) == -1);
            $(this).closest('tr').toggle(!not_found);
            return not_found;
        });
    });
});
</script>
  <script src="js/jquery.js"></script>
  <script type="text/javascript" src="edit.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
 


</body>

</html>
