<?php  require_once('includes/session.php');
        require_once('includes/conn.php');
       require_once('includes/database.php');
       require_once('check.php');    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>MinuteApp</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
    </head>
    <body>



        <div class="wrapper" style="background-color: #f0f0f0;">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="sammacmedia" style="background-color: #814096; border: 1px solid green">
                <div class="sidebar-header">
                <a href="../index.php"><h3>MINUTE APP</h3></a>
                <a href="../index.php"><strong>APP</strong></a>
                </div>

                <ul class="list-unstyled components">
                <li class="" style="background-color: #000;">
                        <a href="start.php">
                            <i class="fa fa-play"></i>
                           START MEETING
                        </a>
                    </li>

                    <li class="active" style="background-color: #eee; color: green;">
                        <a href="dashboard.php">
                            <i class="fa fa-th"></i>
                           Dashboard
                        </a>
                    </li>
                              <?php
                    if($_SESSION['permission']=='Admin' or $_SESSION['permission']=='Employee' ){
                        
                    
                    ?>
                    <li>
                        <a href="a_participants.php">
                            <i class="fa fa-plus"></i>
                            Add participants
                        </a>
                      
                    </li>
                    <?php }?>
                    <li>
                        <a href="all_participants.php">
                            <i class="fa fa-table"></i>
                            View Participants
                        </a>
                    </li>
                    <li>
                        <a href="minute.php">
                            <i class="fa fa-link"></i>
                            Minute
                        </a>
                    </li>
                    <?php
                    if($_SESSION['permission']=='Admin' or $_SESSION['permission']=='Employee' ){
                        
                    
                    ?>
                    <li>
                        <a href="agenda.php">
                            <i class="fa fa-plus"></i>
                            Add Agenda
                        </a>
                      
                    </li>
                    <?php }?>

                    <li>
                        <a href="agendas.php">
                            <i class="fa fa-table"></i>
                            View Agenda
                        </a>
                    </li>
                            
                             <?php



                    if($_SESSION['permission']=='Admin' or $_SESSION['permission']=='Employee' ){
                    ?>
                    <li>
                        <a href="a_users.php">
                            <i class="fa fa-user"></i>
                            Add Users
                        </a>
                    </li>
                    <li>
                        <a href="v_users.php">
                            <i class="fa fa-table"></i>
                            View Users
                        </a>
                    </li>
                    <?php } ?>



                    <?php
                    if($_SESSION['permission']=='Admin' or $_SESSION['permission']=='Employee' ){
                        
                    
                    ?>
                    <li>
                        <a href="message.php">
                            <i class="fa fa-table"></i>
                           Send Messages
                        </a>
                    </li>

                    <li>
                        <a href="messages.php">
                            <i class="fa fa-table"></i>
                           All Messages
                        </a>
                    </li>
                    <?php }?>


                    <li>
                        <a href="settings.php">
                            <i class="fa fa-cog"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content" style="width: 100%;">
             
                <div clas="col-md-12"> 
                    <!--div class="img-thumbnail"></div>
                    <img src="assets/image/line.png" class="img-thumbnail">
                    </div>-->
         
                
                <nav class="navbar navbar-default sammacmedia" style="background-color: #814096;">
                    <div class="container-fluid">

                        <div class="navbar-header" id="sams">
                            <button type="button" id="sidebarCollapse" id="makota" class="btn btn-sam animated tada navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                            <ul class="nav navbar-nav navbar-right  makotasamuel">
                                <li><a href="#"><?php require_once('includes/name.php');?></a></li>
                                <li ><a href="logout.php"><i class="fa fa-power-off"> Logout</i></a></li>
           
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="line"></div>

                <!-- <div class="row"> -->
                <!-- <div class="col-lg-6 col-md-6 "> -->
                    <div class="panel panel strover sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-calendar fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h1 class="huge"><?php echo date('d');?></h1>
                                    <h3><?php echo date('l') .' '.date('d').', '.date('Y');?></h3>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>


                <div class="row">
                <div class="col-lg-6 col-md-6 ">
                    <div class="panel panel sammac sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                <?php 
                                    $conn = mysqli_connect("localhost", "root", "", "minuteapp") or die("Error : " . mysqli_error($conn));
                                    $notes = "select * from participant";
                                    $result = mysqli_query($conn, $notes);
                                    $empl = mysqli_num_rows($result);
                                    ?>
                                    <div class="huge"><?php echo $empl;?></div>
                                    <div>Total Number Of participant</div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>

                
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel strover sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-link fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php 
                                    $conn = mysqli_connect("localhost", "root", "", "minuteapp") or die("Error : " . mysqli_error($conn));
                                    $notes = "select * from main";
                                    $result = mysqli_query($conn, $notes);
                                    $report = mysqli_num_rows($result);
                                    ?>
                                    <div class="huge"><?php echo $report;?></div>
                                    <div>Total Number Of Minute</div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>


                <div class="col-lg-6 col-md-6">
                    <div class="panel panel strover sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                <?php 
                                    $conn = mysqli_connect("localhost", "root", "", "minuteapp") or die("Error : " . mysqli_error($conn));
                                    $notes = "select * from users";
                                    $result = mysqli_query($conn, $notes);
                                    $user = mysqli_num_rows($result);
                                    ?>
                                    <div class="huge"><?php echo $user;?></div>
                                    <div>Total Number Of Users</div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>

                <div class="row">
                <div class="col-lg-6 col-md-6 ">
                    <div class="panel panel sammac sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-minus-square fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                <?php 
                                    $conn = mysqli_connect("localhost", "root", "", "minuteapp") or die("Error : " . mysqli_error($conn));
                                    $notes = "select * from agenda";
                                    $result = mysqli_query($conn, $notes);
                                    $agenda = mysqli_num_rows($result);
                                    ?>
                                    <div class="huge"><?php echo $agenda;?></div>
                                    <div>Total Number Of Agenda</div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>



                    
                    
            </div>
                <div class="line"></div>
                <footer>
            <p class="text-center">
            Designed by Binary Tech &copy<?php echo date("Y ");?>
            </p>
            </footer>
            </div>
            
        </div>





        <!-- jQuery CDN -->
         <script src="assets/js/jquery-1.10.2.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="assets/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
             $('sams').on('click', function(){
                 $('makota').addClass('animated tada');
             });
         </script>
    </body>
</html>
