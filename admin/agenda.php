<?php require_once('includes/session.php');
      require_once('includes/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>MinuteApp</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
         <link rel="stylesheet" href="vendors/datatables/datatables.min.css">
    </head>
    <style>
        textarea{
            width: 100%;
            resize: none;
            height: 38rem;
            padding: 2rem;
            border-radius: 1rem;
            border: 2px solid #000;
            filter: drop-shadow(4px 3px 3px #eee);
        }
    </style>
    <body>



        <div class="wrapper" style="background-color: #f0f0f0;">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="sammacmedia" style="background-color: #814096; border: 1px solid green">
                <div class="sidebar-header">
                <a href="../index.php"><h3>MINUTE APP</h3></a>
                <a href="../index.php"><strong>APP</strong></a>
                </div>

            
                <ul class="list-unstyled components">
                <li style="background-color: #000;">
                        <a href="start.php">
                            <i class="fa fa-play"></i>
                           START MEETING
                        </a>
                    </li>

                    <li class="" style="background-color: #eee; color: green;">
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
                    <li class="active">
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
                    <!-- <img src="assets/image/line.png" class="img-thumbnail"> -->
                    <!-- </div> -->
         
                
                <nav class="navbar navbar-default sammacmedia" style="background-color: #814096; border: 1px solid green">
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

                <?php
                $conn = mysqli_connect("localhost", "root", "", "minuteapp") or die("Error : " . mysqli_error($conn));

                if (isset ($_POST['submit'])){
                    $agenda = $_POST['agenda'];
                    $date = date(" d M Y ");
                    $time = date("H:i:s");
                
                    $insert = "INSERT INTO agenda(agenda, date, time) VALUES('$agenda', '$date', '$time')";
                    if (mysqli_query($conn, $insert)){
                        echo "<script>alert('Agenda created successfully !!!')</script>";
                    } else{
                        echo "<script>alert('error!!!, unable to create agenda???')";
                        die("Error : " . mysqli_error($conn));
                    }
                }
                ?>

                <div class="panel panel-default sammacmedia">
            <div class="panel-heading">Add Agenda</div>
        <div class="panel-body">


            <form action="" method="post">
                <textarea name="agenda" id="agenda"></textarea>
                <div class="row">
                <div class="col-md-6">
                  <button type="submit" name="submit" class="btn btn-suc btn-block"><span class="fa fa-plus"></span> Process</button>  
                </div>
                     <div class="col-md-6">
                  <button type="reset" class="btn btn-dan btn-block"><span class="fa fa-times"></span> Cancel</button>  
                </div>
                </div>
            </form>
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

         <script src="assets/js/jquery-1.10.2.js"></script>
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="vendors/datatables/datatables.min.js"></script>
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
         <script type="text/javascript">

        $(document).ready(function () {
 
            window.setTimeout(function() {
        $("#sams1").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
        });
            }, 5000);
 
        });
    </script>
         <script type="text/javascript">
             
             $(document).ready( function () {
                 $('#myTable').DataTable();
             } );
         </script>
    </body>
</html>
