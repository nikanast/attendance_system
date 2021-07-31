<?php
  include('../Controller/test/session.php');
  date_default_timezone_set('Europe/Athens');
  $currentDate = date('Y-m-d');
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

  <title>Γιατροί</title>

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
      <a href="" class="logo">MALTEZOS <span class="lite">NURSE FOR YOU</span></a>
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
  <?php
  	echo $login_name." ".$login_surn;
  ?></span>
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
            <a class="" href="superuseresults.php">
                          <i class="icon_house_alt"></i>
                          <span>Aρχική</span>
                      </a>
          </li>
          <li>
            <a class="" href="form.php">
                          <i class="icon_document_alt"></i>
                          <span><b>+</b> Προσωπικό</span>
                      </a>
          </li>
          <li>
            <a class="" href="form2.php">
                          <i class="icon_document_alt"></i>
                          <span><b>+</b> Ασθενή</span>
                      </a>
          </li>
          <li>
            <a class="" href="register.php">
                          <i class="icon_document_alt"></i>
                          <span><b>+</b> Χρήστη</span>
                      </a>
          </li>
          <li>
            <a class="" href="visit.php">
                          <i class="icon_document_alt"></i>
                          <span><b>+</b> Eπίσκεψη</span>
                      </a>
          </li>
          <li>
            <a class="" href="shistory.php">
                          <i class="icon_folder-alt"></i>
                          <span>Ιστορικό Ασθενών</span>
                      </a>
          </li>
          <li>
            <a class="" href="../Controller/test/logout.php">
                          <i class="icon_close_alt2"></i>
                          <span>Αποσύνδεση</span>
                      </a>
          </li>
          <!--
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="form_component.html">Form Elements</a></li>
              <li><a class="" href="form_validation.html">Form Validation</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="general.html">Elements</a></li>
              <li><a class="" href="buttons.html">Buttons</a></li>
              <li><a class="" href="grids.html">Grids</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
          </li>
          <li>
            <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>

                      </a>

          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="basic_table.html">Basic Table</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="profile.html">Profile</a></li>
              <li><a class="" href="login.html"><span>Login Page</span></a></li>
              <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
              <li><a class="" href="blank.html">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li>
            </ul>
          </li>

        </ul>-->
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Χρηστες</h3>
            
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">Αρχική</a></li>
              <li><i class="fa fa-table"></i>Χρήστες</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Γιατροί : <span style="color:red;"><?php
                $servername = "localhost";
                $username = "webeleph_pod";
                $password = "Web939293!";
                $dbname = "webeleph_maltezos";
                
                	// Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $conn->set_charset("utf8");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql_select2 = "SELECT COUNT(id) FROM staff WHERE sgender='1'";
                    $result2 = $conn->query($sql_select2);
                    
                    echo '<span style="color:red;font-size: 150%"> </span>';
                    $row = $result2->fetch_row();
                    echo $row[0];
                    
                    
                ?>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Εκτύπωση</button>
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
            <input type="text" id="search" placeholder="Εύρεση..." title="Type in a name">
              <div id="print1">
              <table id="recipes" class="table table-striped table-advance table-hover" >
                <tbody>
                  <tr>
                    <th style="text-align: center;"><i class=""></i>ID</th>
                    <th style="text-align: center;"><i class=""></i>Όνομα</th>
                    <th style="text-align: center;"><i class=""></i>Επίθετο</th>                 
                    <th style="text-align: center;"><i class=""></i>Username</th>
                    <th style="text-align: center;"><i class=""></i>Ρόλος</th>
                    <th style="text-align: center;"><i class="">Email</i></th>
                    <!--<th style="text-align: center;"><i class=""></i>Tροπ.</th>
<th style="text-align: center;">Διαγραφή</th> -->
                  </tr>
                  <tr>
                                   <?php
   $servername = "localhost";
                $username = "webeleph_pod";
                $password = "Web939293!";
                $dbname = "webeleph_maltezos";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset("utf8");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql_select = "SELECT * from login WHERE sgender='1'";
	$result1 = $conn->query($sql_select);

    
	$check=0;
	while($row = $result1->fetch_assoc())
						{
			
                        $id=$row['id'];			
                        $name=$row['name'];
                        $surname=$row['surname'];
                        $username=$row['username']; 
                        $role=$row['role'];                     

                       

 

							echo
							"<tr>
<td align=center style='width: 8%; vertical-align: middle;' width='8%';>{$row['id']}</td>    
<td align=center style='width: 8%; vertical-align: middle;' width='8%';>{$row['name']}</td>                            
<td align=center style='width: 8%; vertical-align: middle;' width='8%';>{$row['surname']}</td>
<td align=center style='width: 8%; vertical-align: middle;' width='8%';>{$row['username']}</td>
<td align=center style='width: 8%; vertical-align: middle;' width='8%';>{$row['role']}</td>
<td align=center method=post><input type=button class=button1 onclick=update('$id') value=✎></td>
<td align=center method=post><input type=button class=button1 onclick=del('$id') value=ⓧ></td>
 
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
  	background-color: #ff7474;
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
  background-color: #d1b993;
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
  <script type="text/javascript" src="functions2.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
 


</body>

</html>