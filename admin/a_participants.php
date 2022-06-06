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

                    <li class="" style="background-color: #eee; color: green;">
                        <a href="dashboard.php">
                            <i class="fa fa-th"></i>
                           Dashboard
                        </a>
                    </li>
                              <?php
                    if($_SESSION['permission']=='Admin' or $_SESSION['permission']=='Employee' ){
                        
                    
                    ?>
                    <li class="active">
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
                    <!-- <img src="assets/image/line.png" class="img-thumbnail">
                    </div> -->
         
                
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
                            if(isset($mysqli,$_POST['submit'])){
                            $name = mysqli_real_escape_string($mysqli,$_POST['fname']);
                            $surname = mysqli_real_escape_string($mysqli,$_POST['surname']);
                            $email = mysqli_real_escape_string($mysqli,$_POST['email']);
                            $phone = mysqli_real_escape_string($mysqli,$_POST['phone']); 
                            $gender = mysqli_real_escape_string($mysqli,$_POST['gender']);     
                            $position = mysqli_real_escape_string($mysqli,$_POST['position']);     
                            $joined = date("Y-m-d");
                            $employee_id = rand(9999999,1000000);    
                            $tmp = rand(1,9999);
                        
                            

    

                            $sql_n = "SELECT * FROM participant WHERE phone ='$phone'";
                            $res_n = mysqli_query($mysqli, $sql_n);    
                            $sql_e = "SELECT * FROM participant WHERE email ='$email'";
                            $res_e = mysqli_query($mysqli, $sql_e);
                            if(mysqli_num_rows($res_e) > 0){
                            ?>
                             <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Danger! </strong><?php echo'sorry the email is already allocated to someone';?></div>
                        <?php    
                       }elseif(mysqli_num_rows($res_n) > 0){
                        ?>
                        <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Danger! </strong><?php echo'sorry the phone is already allocated to someone';?></div>
                        <?php    
                        }
                    else{      
                  
                $sql = "INSERT INTO participant(name,surname,email,gender,phone,participant_id,position,date)VALUES('$name','$surname','$email','$gender','$phone','$employee_id','$position','$joined')";
                $results = mysqli_query($mysqli,$sql);
              
                // header('Location: a_participants.php');                      
                        
                        
                        if($results==1){
                              ?>
                        <div class="alert alert-success strover animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully! </strong><?php echo'Thank you for adding new participant';?></div>
                        <?php

                          }else{
                                ?>
                        <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Danger! </strong><?php echo'OOPS something went wrong';?></div>
            
                        <?php    
                          }      
                        }
                    }
            
                
                ?>
		<div class="panel panel-default sammacmedia">
            <div class="panel-heading">Add New Participant</div>
        <div class="panel-body">
            <form method="post" action="a_participants.php" enctype="multipart/form-data">
        <div class="row form-group">
          <div class="col-lg-6">
            <label>Name</label>
              <input type="text" class="form-control" name="fname"  required>
            </div>  
             <div class="col-lg-6">
            <label>Surname</label>
              <input type="text" class="form-control" name="surname" required>
            </div>  
        </div>
            <div class="row form-group">
          <div class="col-lg-6">
            <label>Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>  
             <div class="col-lg-6">
            <label>Phone</label>
              <input type="text" class="form-control" name="phone"  placeholder="Enter your work phone number" required>
            </div>
            <input type="hidden" name="AmountHr">  
        </div>   
         <!-- <div class="row form-group">
          <div class="col-lg-6">
            <label>Picture</label>
             <input type="file" class="form-control" name="file" required>
            </div>  
         </div> -->
            <div class="col-lg-6">
            <label>Gender</label>
             <select class="form-control" name="gender">
              <option>M</option>
              <option>F</option>      
              </select>
            </div>  

        <div class="row form-group">
            <div class="col-lg-6">
            <label>Employee Position</label>
             <select class="form-control" name="position">
              <option>Chairman</option>
              <option>Vice chairman</option>      
              <option>Secretary</option>      
              <option>Ass.Secretary</option>      
              <option>Member</option>         
              </select>
            </div>  
            </div>
        </div>

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
         <script type="text/javascript">

        $(document).ready(function () {
 
            window.setTimeout(function() {
        $("#sams1").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
        });
            }, 5000);
 
        });
    </script>
    </body>
</html>
