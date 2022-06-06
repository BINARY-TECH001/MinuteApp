<?php   
    require_once 'includes/header.php';
?>

<?php
    $conn = mysqli_connect("localhost", "root", "", "minuteapp") or die("Error : " . mysqli_error($conn));
    
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $date = date(" d M Y ");
        $time = date("H:i:s");

    
        $insert = "INSERT INTO contact(name, email, phone, message, date, time) VALUES('$name', '$email', '$phone', '$message', '$date', '$time')";
        if (mysqli_query($conn, $insert)){
            echo "<script>alert('message sent')</script>";
        } else{
            echo "<script>alert('error')";
            die("Error : " . mysqli_error($conn));
        }
    }
?>




<!-- contact section starts  -->

<section class="contact" id="contact">
    <div class="image">
        <img src="images/contact-img.png" alt="">
    </div>

    <form action="" method="POST">

        <h1 class="heading">contact us</h1>

        <div class="inputBox">
            <input type="text" name="name" required>
            <label>name</label>
        </div>

        <div class="inputBox">
            <input type="email" name="email" required>
            <label>email</label>
        </div>

        <div class="inputBox">
            <input type="number" name="phone" required>
            <label>phone</label>
        </div>

        <div class="inputBox">
            <textarea required name="message" id="" cols="30" rows="10"></textarea>
            <label>message</label>
        </div>

        <input type="submit" name="submit" class="btn" >

    </form>

</section>


<?php
    require_once 'includes/footer.php';
?>