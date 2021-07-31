<?php
  

    date_default_timezone_set('Europe/Athens');
  
    if ( ! empty( $_GET['id'] ) ) {
	echo "JS says " . $_GET['id']; // Outputs : JS says Hi!
    } 
    
	if ( ! empty( $_GET['period'] ) ) {
	echo "JS says " . $_GET['period']; // Outputs : JS says Hi!
    }
	
	if (empty($_POST['id'])){
        //fullname=0: fullname required
        //Header( 'Location: fbirth.php#openModalValues' );
    }
    else{
       // $pid=test_input($_POST['pid']);
	   $id=$_POST['id'];
        }
    
	
	
	if (empty($_POST['period'])){
        //fullname=0: fullname required
        //Header( 'Location: fbirth.php#openModalValues' );
    }
    else{
       // $pid=test_input($_POST['period']);
	   $period=$_POST['period'];
        }
	
	
 
	

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
		  
		  <li class="active">
            <a class="" href="attendance.php">
                          <i class="icon_folder-alt"></i>
                          <span>Attendance</span>
                      </a>
          </li>
        
          <li class="active">
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
		  <li>
              <a class="" href="report.php">
                          <i class="icon_folder-alt"></i>
                          <span>Reports</span>
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
              <li><i class="fa fa-table"></i>Card reader</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        
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
/*
$sql_select4 = "SELECT clock_time from break_time WHERE ((user_id = $id) && (mflag = $period))";
$result4 = $conn->query($sql_select4);

$sql_select4 = "SELECT clock_time from attendance WHERE ((user_id = $id) && (mflag = $period))";
$result4 = $conn->query($sql_select4);



$columns[0] = '00:00:00';
$columns[1] = '00:00:00';
$columns[2] = '00:00:00';
$columns[3] = '00:00:00';
$columns[4] = '00:00:00';
$columns[5] = '00:00:00';
$columns[6] = '00:00:00';
$columns[7] = '00:00:00';
$columns[8] = '00:00:00';
$columns[9] = '00:00:00';
$columns[10] = '00:00:00';
$columns[11] = '00:00:00';
$columns[12] = '00:00:00';
$columns[13] = '00:00:00';
$columns[14] = '00:00:00';
$columns[15] = '00:00:00';
$columns[16] = '00:00:00';
$columns[17] = '00:00:00';
$columns[18] = '00:00:00';
$columns[19] = '00:00:00';
$columns[20] = '00:00:00';
$columns[21] = '00:00:00';
$columns[22] = '00:00:00';
$columns[23] = '00:00:00';
$columns[24] = '00:00:00';
$columns[25] = '00:00:00';
$columns[26] = '00:00:00';
$columns[27] = '00:00:00';
$columns[28] = '00:00:00';
$columns[29] = '00:00:00';
$columns[30] = '00:00:00';
$columns[31] = '00:00:00';
$columns[32] = '00:00:00';
$columns[33] = '00:00:00';
$columns[34] = '00:00:00';
$columns[35] = '00:00:00';
$columns[36] = '00:00:00';
$columns[37] = '00:00:00';
$columns[38] = '00:00:00';
$columns[39] = '00:00:00';
$columns[40] = '00:00:00';
$columns[41] = '00:00:00';
$columns[42] = '00:00:00';
$columns[43] = '00:00:00';
$columns[44] = '00:00:00';
$columns[45] = '00:00:00';
$columns[46] = '00:00:00';
$columns[47] = '00:00:00';
$columns[48] = '00:00:00';
$columns[49] = '00:00:00';
$columns[50] = '00:00:00';
$columns[51] = '00:00:00';
$columns[52] = '00:00:00';
$columns[53] = '00:00:00';
$columns[54] = '00:00:00';
$columns[55] = '00:00:00';
$columns[56] = '00:00:00';
$columns[57] = '00:00:00';
$columns[58] = '00:00:00';
$columns[59] = '00:00:00';
$columns[60] = '00:00:00';
$columns[61] = '00:00:00';


while($row = $result4->fetch_assoc())
{

      
        $clock_time =$row['clock_time'];

        $columns[] = $clock_time;


        
}



$timeflag1 = $columns[0];
$timeflag2 = $columns[1];
$timeflag3 = $columns[2];
$timeflag4 = $columns[3];
$timeflag5 = $columns[4];
$timeflag6 = $columns[5];
$timeflag7 = $columns[6];
$timeflag8 = $columns[7];
$timeflag9 = $columns[8];
$timeflag10 = $columns[9];
$timeflag11 = $columns[10];
$timeflag12 = $columns[11];
$timeflag13 = $columns[12];
$timeflag14 = $columns[13];
$timeflag15 = $columns[14];
$timeflag16 = $columns[15];
$timeflag17 = $columns[16];
$timeflag18 = $columns[17];
$timeflag19 = $columns[18];
$timeflag20 = $columns[19];
$timeflag21 = $columns[20];
$timeflag22 = $columns[21];
$timeflag23 = $columns[22];
$timeflag24 = $columns[23];
$timeflag25 = $columns[24];
$timeflag26 = $columns[25];
$timeflag27 = $columns[26];
$timeflag28 = $columns[27];
$timeflag29 = $columns[28];
$timeflag30 = $columns[29];
$timeflag31 = $columns[30];
$timeflag32 = $columns[31];
$timeflag33 = $columns[32];
$timeflag34 = $columns[33];
$timeflag35 = $columns[34];
$timeflag36 = $columns[35];
$timeflag37 = $columns[36];
$timeflag38 = $columns[37];
$timeflag39 = $columns[38];
$timeflag40 = $columns[39];
$timeflag41 = $columns[40];
$timeflag42 = $columns[41];
$timeflag43 = $columns[42];
$timeflag44 = $columns[43];
$timeflag45 = $columns[44];
$timeflag46 = $columns[45];
$timeflag47 = $columns[46];
$timeflag48 = $columns[47];
$timeflag49 = $columns[48];
$timeflag50 = $columns[49];
$timeflag51 = $columns[50];
$timeflag52 = $columns[51];
$timeflag53 = $columns[52];
$timeflag54 = $columns[53];
$timeflag55 = $columns[54];
$timeflag56 = $columns[55];
$timeflag57 = $columns[56];
$timeflag58 = $columns[57];
$timeflag59 = $columns[58];
$timeflag60 = $columns[59];
$timeflag61 = $columns[60];
$timeflag62 = $columns[61];





$time1 = strtotime($timeflag1);  

$time2 = strtotime($timeflag2);  

$time3 = strtotime($timeflag3);  

$time4 = strtotime($timeflag4);


$time5 = strtotime($timeflag5);  


$time6 = strtotime($timeflag6);  

$time7 = strtotime($timeflag7);  

$time8 = strtotime($timeflag8);

$time9 = strtotime($timeflag9);  

$time10 = strtotime($timeflag10);  

$time11 = strtotime($timeflag11);  

$time12 = strtotime($timeflag12);

$time13 = strtotime($timeflag13);  

$time14 = strtotime($timeflag14);  

$time15 = strtotime($timeflag15);  

$time16 = strtotime($timeflag16);

$time17 = strtotime($timeflag17);  

$time18 = strtotime($timeflag18);  

$time19 = strtotime($timeflag19);  

$time20 = strtotime($timeflag20);

$time21 = strtotime($timeflag21);  

$time22 = strtotime($timeflag22);  

$time23 = strtotime($timeflag23);  

$time24 = strtotime($timeflag24);

$time25 = strtotime($timeflag25);  

$time26 = strtotime($timeflag26);  

$time27 = strtotime($timeflag27);  

$time28 = strtotime($timeflag28);

$time29 = strtotime($timeflag29);  

$time30 = strtotime($timeflag30);  

$time31 = strtotime($timeflag31);  

$time32 = strtotime($timeflag32);

$time33 = strtotime($timeflag33);  

$time34 = strtotime($timeflag34);  

$time35 = strtotime($timeflag35);  

$time36 = strtotime($timeflag36);

$time37 = strtotime($timeflag37);  

$time38 = strtotime($timeflag38);  

$time39 = strtotime($timeflag39);  

$time40 = strtotime($timeflag40);

$time41 = strtotime($timeflag41);  

$time42 = strtotime($timeflag42);  

$time43 = strtotime($timeflag43);  

$time44 = strtotime($timeflag44);

$time45 = strtotime($timeflag45);  

$time46 = strtotime($timeflag46);  

$time47 = strtotime($timeflag47);  

$time48 = strtotime($timeflag48);

$time49 = strtotime($timeflag49);  

$time50 = strtotime($timeflag50);  

$time51 = strtotime($timeflag51);  

$time52 = strtotime($timeflag52);

$time53 = strtotime($timeflag53);  

$time54 = strtotime($timeflag54);  

$time55 = strtotime($timeflag55);  

$time56 = strtotime($timeflag56);

$time57 = strtotime($timeflag57);  

$time58 = strtotime($timeflag58);  

$time59 = strtotime($timeflag59);  

$time60 = strtotime($timeflag60);

$time61 = strtotime($timeflag61);  

$time62 = strtotime($timeflag62);


 echo $time1;
echo '<br>';
echo $time2;
echo '<br>';
echo $time3;
echo '<br>';
echo $time4;
echo '<br>'; 

$fmonthly = abs((((($time1 - $time2)+($time3 - $time4)+($time5 - $time6)+($time7 - $time8)+($time9 - $time10)+($time11 - $time12)+($time13 - $time14)+($time15 - $time16)+($time17 - $time18)+($time19 - $time20)+($time21 - $time22)+($time23 - $time24)+($time25 - $time26)+($time27 - $time28)+($time29 - $time30)+($time31 - $time32)+($time33 - $time34)+($time35 - $time36)+($time37 - $time38)+($time39 - $time40)+($time41 - $time42)+($time43 - $time44)+($time45 - $time46)+($time47 - $time48)+($time49 - $time50)+($time51 - $time52)+($time53 - $time54)+($time55 - $time56)+($time57 - $time58)+($time59 - $time60)+($time61 - $time62))/60)/60));
*/

?>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              Total hours this month: <span style="color:red;"><?php
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


                    $sql_select2 = "SELECT COUNT(id) FROM break_time";
                    $result2 = $conn->query($sql_select2);
                    
                    echo '<span style="color:red;font-size: 150%"> </span>';
                    $row = $result2->fetch_row();
                    
                    echo $fmonthly;

                    $sql_select2 = "SELECT COUNT(id) FROM attendance";
                    $result2 = $conn->query($sql_select2);
                    
                    echo '<span style="color:red;font-size: 150%"> </span>';
                    $row = $result2->fetch_row();
                    
                    echo $fmonthly;
                  
                    
                    
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
                    <th style="text-align: center;"><i class=""></i>Check In</th> 
                    <th style="text-align: center;"><i class=""></i>Check Out</th>
                    <th style="text-align: center;"><i class=""></i>Date</th>                 
                   

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


  $sql_select = "SELECT * from break_time WHERE ((user_id = $id) && (mflag = $period))";
  $result1 = $conn->query($sql_select);
          
              
  $check=0;
    while($row = $result1->fetch_assoc())
                      {
                
                        $id=$row['id'];			
                        $user_id=$row['user_id'];
                        $clock_in=$row['clock_in1'];
                        $clock_out=$row['clock_out1'];
                        $clock_date=$row['clock_date'];
                        $mflag=$row['mflag'];
                                  
           
          
                        echo
                        "<tr>
          <td align=center style='width: 20%; vertical-align: middle;' width='20%';>{$row['id']}</td>    
          <td align=center style='width: 20%; vertical-align: middle;' width='20%';>{$row['clock_in1']}</td>
          <td align=center style='width: 20%; vertical-align: middle;' width='20%';>{$row['clock_out1']}</td>
          <td align=center style='width: 20%; vertical-align: middle;' width='20%';>{$row['clock_date']}</td>
          
                        </tr>\n";
                      }
                      
	$sql_select = "SELECT * from attendance WHERE ((user_id = $id) && (mflag = $period))";
	$result1 = $conn->query($sql_select);

    
	$check=0;
	while($row = $result1->fetch_assoc())
						{
			
              $id=$row['id'];			
              $user_id=$row['user_id'];
              $clock_in=$row['clock_in'];
              $clock_out=$row['clock_out'];
              $clock_date=$row['clock_date'];
              $mflag=$row['mflag'];
                        
 

							echo
							"<tr>
<td align=center style='width: 20%; vertical-align: middle;' width='20%';>{$row['id']}</td>    
<td align=center style='width: 20%; vertical-align: middle;' width='20%';>{$row['clock_in']}</td>
<td align=center style='width: 20%; vertical-align: middle;' width='20%';>{$row['clock_out']}</td>
<td align=center style='width: 20%; vertical-align: middle;' width='20%';>{$row['clock_date']}</td>

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
  <script type="text/javascript" src="functions2.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
 


</body>

</html>
