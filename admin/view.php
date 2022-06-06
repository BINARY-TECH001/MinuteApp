<?php require_once('includes/session.php');
      require_once('includes/conn.php');
?>

    <?php
        $conn = mysqli_connect("localhost", "root", "", "minuteapp") or die("Error : " . mysqli_error($conn));
        $id = $_GET['id'];
        $select = "select * from main where id='".$id."'";
        $result = mysqli_query($conn, $select);
        $row = mysqli_fetch_array($result);
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="style.css">
        <title>MinuteApp</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
         <link rel="stylesheet" href="vendors/datatables/datatables.min.css">
    </head>
    <body id="ele">



      
                <!-- <div class="line"></div> -->
                <div id="content" style="width: 100%;">
             
             <div clas="col-md-12">


                <div class="panel panel-default sammacmedia">
            <div class="panel-heading">Meeting Minute For <?php echo $row['date']?></div>
        <div class="panel-body">
     <form action="" id="xyz">
         <textarea name="" id="" cols="30" rows="10"><?php echo $row['recordText']?> </textarea>
         <div class="b">
                <button class="bttn" onclick="print('xyz')" type="button">PRINT</button>
            </div>
     </form>


     <script>
    function print(ele){
        let html = element.innerHTML;
        let element = document.getElementById(ele);
  
        
        let new_window = window.open('', 'print', height=650; width=900');
        new_window.document.write('<link rel="stylesheet", href="style.css">' );
        new_window.document.write('<link rel="stylesheet", href="assets/css/style.css">' );
        new_window.document.write('<style>button{display: none; }</style>');
        new_window.document.write(html);
        new_window.print();
    }

      
 
</script>
</body>
</html>