<?php require_once('includes/session.php');
      require_once('includes/conn.php');
      require_once('includes/mail-sender.php');

      if(isset($_POST['send_msg'])){
          $subject = $_POST['subject'];
          $body = $_POST['body'];
          $date = date(" d M Y ");
          $time = date("H:i:s");
          
          $sql = mysqli_query($mysqli, "select * from participant");
          if(mysqli_num_rows($sql) > 0){
              while($row = mysqli_fetch_array($sql)){
                  $surname = $row['surname'];
                  $fname = $row['name'];
                  $email = $row['email'];

                  //echo $email;

                  $name = $surname . " " . $fname;

                  $ins = mysqli_query($mysqli, "insert into message(name, email, subject, message, date, time) values ('$name', '$email', '$subject', '$body', '$date', '$time')");
                  sendMail($email, $name, $subject, $body);
              }
          }
      }
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
         <link rel="stylesheet" href="vendors/datatables/datatables.min.css">
         <style>
             .forms{
                 display: flex;
                 flex-direction: column;
                 align-items: center;
                 justify-content: center;
             }

             textarea{
                 height: 30rem;
                 resize: none;
                 margin-bottom: 2rem;
                 width: 100%;
                 padding: 1rem;
             }
             .inn{
                 width: 100%;
                 height: 10rem;
                 padding-left: 1rem;
             }
         </style>
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
                    <li class="active">
                        <a href="#">
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



                <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default sammacmedia">
                        <div class="panel-heading">SEND MESSAGE</div>
                    <div class="panel-body">
                        <form method="post" action="" class="forms">
                                    <label>SUBJECT</label>
                                    <input type="text" name="subject" required class="inn">
                                    <label>MESSAGE</label>
                                    <textarea id="msg" name="body"></textarea>

                                    <!-- <div class="row"> -->
                            <div class="col-md-12">
                            <button type="submit" name="send_msg" class="btn btn-danger btn-block"><span class="fa fa-pencil"></span> SEND</button>  
                            </div>
                        </form>
                </div>
                </div>
                </div>


    <div class="col-md-4">
    <div class="panel panel-default sammacmedia">
            <div class="panel-heading">RECIPIENTS MAIL</div>
            <div class="panel-body">
                        <table class="table table-striped thead-dark table-bordered table-hover" id="myTable">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NAME</th>
                    <th>MAIL</th>
                    <th>Action</th> 

                    
                    
                    </tr>
                </thead>
                    <?php
                                   $a=1;
                    $query=mysqli_query($mysqli,"select * from `participant` ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <tr>
                              <td><?php echo $a;?></td> 
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['email'];?></td>  

                            <td>
                            <a  href="d.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><span class="fa fa-pencil" ></span>Delete</a> 
                              </td>
                          </tr>
                          <?php
                        require('userInfo.php');
                            $a++;
                      }
                       

          
                      if (isset($_GET['idx']) && is_numeric($_GET['idx']))
                      {
                          $id = $_GET['idx'];
                          if ($stmt = $mysqli->prepare("DELETE FROM participant WHERE id = ? LIMIT 1"))
                          {
                              $stmt->bind_param("i",$id);
                              $stmt->execute();
                              $stmt->close();
                               ?>
                    <div class="alert alert-success strover" id="sams1">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong> Successfully! </strong><?php echo'Record Successfully deleted please refresh this page';?></div>
               
                    <?php
                          }
                          else
                          {
                    ?>
                    <div class="alert alert-danger samuel" id="sams1">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong> Danger! </strong><?php echo'OOPS please try again something went wrong';?></div>
                    <?php
                          }
                          $mysqli->close();

                      }
                else

                {

                }
                      ?>
              
               
                </table>
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
