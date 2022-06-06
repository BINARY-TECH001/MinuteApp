    <?php
        $conn = mysqli_connect("localhost", "root", "", "minuteapp") or die("Error : " . mysqli_error($conn));
        
        if (isset ($_POST['new']) && $_POST['new'] == 1){
            $recordText = $_POST['recordText'];
            $date = date(" d M Y ");
            $time = date("H:i:s");
            // $text = $_POST['text'];
        
            $insert = "INSERT INTO main(recordText, date, time) VALUES('$recordText', '$date', '$time')";
            if (mysqli_query($conn, $insert)){
                echo "<script>alert('minute saved')</script>";
            } else{
                echo "<script>alert('error!!!, unable to save agenda !!!')";
                die("Error : " . mysqli_error($conn));
            }
        }
    ?>



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- <link rel="stylesheet" href="index.css"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MinuteApp</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="sttt.css">
        <link href="firstcss.css" type="text/css" rel="stylesheet" />
        <link href="secondcss.css" type="text/css" rel="stylesheet" />
    <script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
    </head>
    <body>
        
    <!-- header section starts  -->

    <header>

        <a href="../index.php" class="logo"><span>Minute</span>App</a>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fas fa-bars"></label>

        <nav class="navbar">
            <a href="../index.php">home</a>
            <a href="dashboard.php">files</a>
            <a href="about.hp">Dashboard</a>
            <a href="#"></a>
            <a href="#">settings</a>
            <a href="logout.php">logout</a>
        </nav>

    </header>

    <!-- header section ends -->

    <!--audio/video section starts  -->

    <section>

        <div class="section1">
            <h1 class="heading"> Video & Audio Recorder </h1>

            <div class="lab">
                <label for="media" class="lab">Select what you want to record:</label>

                <select id="media">
                    <option value="choose-an-option">
                        Choose an option
                    </option>
                    <option value="vid">Video</option>
                    <option value="aud">Audio</option>
                </select>
            </div>
            

            <div class="display-none" id="vid-recorder">
                <h3>Record Video </h3>
                <video autoplay id="web-cam-container"
                    style="background-color: black;">
                    Your browser doesn't support
                    the video tag
                </video>

                <div class="recording" id="vid-record-status">
                    Click the "Start video Recording"
                    button to start recording
                </div>

                <!-- This button will start the video recording -->
                <button type="button" id="start-vid-recording"
                    onclick="startRecording(this,
                    document.getElementById('stop-vid-recording'))">
                    Start video recording
                </button>

                <!-- This button will stop the video recording -->
                <button type="button" id="stop-vid-recording"
                    disabled onclick="stopRecording(this,
                    document.getElementById('start-vid-recording'))">
                    Stop video recording
                </button>

                <!--The video element will be created using
                    JavaScript and contains recorded video-->
                <!-- <video id="recorded-video" controls>
                    Your browser doesn't support the video tag
                </video> -->

                <!-- The below link will let the
                    users download the recorded video -->
                <!-- <a href="" > Download it! </a> -->
            </div>

            <div class="display-none" id="aud-recorder">
                <h3> Record Audio</h3>

                <div class="recording" id="aud-record-status">
                    Click the "Start Recording"
                    button to start recording
                </div>

                <button type="button" id="start-aud-recording"
                    onclick="startRecording(this,
                    document.getElementById('stop-aud-recording'))">
                    Start recording
                </button>

                <button type="button" id="stop-aud-recording"
                    disabled onclick="stopRecording(this,
                    document.getElementById('start-aud-recording'))">
                    Stop recording
                </button>

                <!-- The audio element will contain the
                    recorded audio and will be created
                    using Javascript -->
                <!-- <audio id="recorded-audio"
                    controls></audio> -->

                <!-- The below link will let the users
                    download the recorded audio -->
                <!-- <a href="" > Download it! </a> -->
            </div>
            
        </div>

    <div class="line"></div>

        
            <div class="container">
                <h1 class="heading">SPEECH TO TEXT</h1>
                    <div class="form-group">
                    <form action=" " method="post">
                        <input type="hidden" name="new" value="1"/>
                        <textarea style="background: #fff;" name="recordText" id="textbox" cols="30" rows="10" class="form-content"></textarea>
                        <input type="submit" name="save" class="save_text" value="SAVE">
                    </form>   
                    </div>
                    <div class="form-group">
                        <button id="start-btn" class="btn btn-danger btn-block">START</button>
                        <button id="stop">PAUSE</button>
                        <!-- <button id="saves">SAVE</button> -->
                        <p id="instructions">Press the start button</p>
                    </div>
            </div>
            
    </section>


    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="speech.js"></script>
    <script src="audio.js"></script>
    </html>
