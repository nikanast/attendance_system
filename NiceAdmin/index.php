<?php
  include('../Controller/test/session.php');
  date_default_timezone_set('Europe/Athens');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="shortcut icon" href="img/favicon.png">

  <title>CARD READER</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
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


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">CARD <span class="lite">READER</span></a>
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

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/user.png" style="width:40px;height:40px;">
                            </span>
                            <span class="username"><?php
  	 echo $login_name." ".$login_surn; 
  ?></span>
                            <b class="caret"></b>
                        </a>
            
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
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Homepage</span>
                      </a>
          </li>
		  
		  <li>
            <a class="" href="attendance.php">
                          <i class="icon_folder-alt"></i>
                          <span>Attendance</span>
                      </a>
          </li>
		  
          <li>
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
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i>Homepage</h3>
            <ol class="breadcrumb">
             

              <br>
              
            </ol>
          </div>
        </div>
   


    <br> <!--<div style="width:150px;text-align:center;font-size:14px;"><iframe src="https://www.eortologio.net/widget.php?color=797979&color2=eeeeee&bgcolor=eeeeee&width=150&height=52"	
			 width="150" height="52"  scrolling=no marginwidth=0 marginheight=0 frameborder=0 border=0 style="border:0;margin:0;padding:0;"></iframe></div>-->



<br>
        <div class="row">
 
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <a href="attendance.php">
            <div class="info-box blue-bg">
              <i class=""><img src="https://img.icons8.com/officel/64/000000/select-users.png"/></i>
               <br><br><br><br><br><div class="count">ATTENDANCES</div>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
            </a>
          </div>
          
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <a href="breaktime.php">
            <div class="info-box blue-bg">
              <i class=""><img src="https://img.icons8.com/officel/64/000000/select-users.png"/></i>
               <br><br><br><br><br><div class="count">BREAK TIME</div>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
            </a>
          </div>
          
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <a href="users.php">
            <div class="info-box blue-bg">
              <i class=""><img src="https://img.icons8.com/dusk/64/000000/user-folder.png"/></i>
               <br><br><br><br><br><div class="count">USERS</div>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
            </a>
          </div>


          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <a href="report.php">
            <div class="info-box blue-bg">
              <i class=""><img src="https://img.icons8.com/cotton/64/000000/business-report.png"/></i>
               <br><br><br><br><br><div class="count">REPORT</div>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
            </a>
          </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <a href="pending.php">
            <div class="info-box blue-bg">
              <i class=""><img src="https://img.icons8.com/cotton/64/000000/check-male--v1.png"/></i>
               <br><br><br><br><br><div class="count">PENDING USERS</div>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
            </a>
          </div>
          
         
          </div>

          <style type="text/css">
.clockdate-wrapper {
    background-color: none;
    padding:25px;
    max-width:350px;
    width:100%;
    text-align:center;
    border-radius:5px;
    margin:0 auto;

}
#clock{
    background-color:none;
    font-family: sans-serif;
    font-size:60px;
    text-shadow:0px 0px 1px #fff;
    color:#28727B;
}
#clock span {
	color:#888;
	text-shadow:0px 0px 1px #333;
	font-size:30px;
	position:relative;
	top:-27px;
	left:-10px;
}
#date {
    letter-spacing:5px;
    font-size:14px;
    font-family:arial,sans-serif;
    color:#000000;
}
div.container-fluid {
    background-color:#fff6e5;
}
.label-pink,
.badge-pink { background-color: #ffb6c1!important}
</style>
        <body onload="startTime()">
<!-- Clock with 12 Hours Format & Date -->
<script>
function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'Novemeber', 'December'];
    var days = ['Sunday', 'Monday', 'Tuseday', 'Wednesday', 'Thurday', 'Friday', 'Saturday'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
    document.getElementById("date").innerHTML = date;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
</script>


<div id="clockdate">
  <div class="clockdate-wrapper">

	 <img src="logo100.png" width="90" height="95">
    <div id="clock"></div>
	<br>
    <div id="date"></div>
    <br>
   <font size="3" color="#28727B"><b>CARD READER</b></font>
  </div>
</div>
    </div> 
<!--/ Clock Section -->

        <div class="row">
          <div class="col-lg-9 col-md-12">

            
            </div>
          </div>
          <div class="col-md-3">
            <!-- List starts -->
            
        </div>


        <!-- Today status end -->



        <div class="row">

          
          </div>
          <!--/col-->
          <div class="col-md-3">

            
          </div>
          <!--/col-->
          <div class="col-md-3">

            

          </div>
          <!--/col-->

        </div>



        <!-- statics end -->




        <!-- project team & activity start -->
        <div class="row">
         
          </div>

          <div class="col-lg-8">
            
        </div><br><br>

        <div class="row">
          

          </div>

          <div class="col-md-6 portlets">
            
        </div>



      <div class="text-right">
        <div class="credits">
          
          Build by <a href="webelephant.tech">Webelephant Team</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
