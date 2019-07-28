<!DOCTYPE html>
<html lang="en">
<head>
    <title>Scanning KTP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/logo smkn 8 semarang.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!-- ==============================================================================================-->

</head>
<body style="background-color: #666666;">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                    <div class="login100-form validate-form">

                    <!-- <div class="container" style="padding: 0px 0px 0px 0px !important;">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <span class="login100-form-nav-title">
                                <b></b>
                            </span>
                            <a style="background-image: url('images/icons/power-off.png'); align-text: right; width: 34px; height: 32px;" href="#"></a>
                        </nav>
                    </div> -->
                    
<!--                     <center>
                        <div class=" p-t-50 p-b-15">
                            <img src="./images/logo smkn 8 semarang.png" alt="..." style="height: 150px; width: 150px;">
                        </div>
                    </center> -->

                    <span style="margin-top: 80px;" class="login100-form-title p-b-60">
                        <b>Cara Menggunakan Scanner</b>
                    </span>
                    <span class="login100-form-title p-b-60" style=" margin-left: 40px; text-align: justify;">
                        1. Letakkan KTP Anda Hingga Pas Dengan Kamera <br><br>
                        2. Jika Sudah Fit, Maka Klik Scan 
                    </span>
                    <div class="container-login100-form-btn">
                        <span class="login100-form-btn" style="text-decoration: none">
                            <button onclick="takeSnapshot()">
                                SCAN
                            </button>
                        </span>
                    </div>
                    
                    <!-- <div class="text-center p-t-10 p-b-10">
                        <span class="txt2">
                            - or -
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <a href="" class="login100-form-btn" style="text-decoration: none">
                            <button>
                                MANUAL INPUT
                            </button>
                        </a>
                    </div>

                    <div class="text-center p-t-65 p-b-20">
                        <span class="txt2">
                            Supported by RPL SMK Negeri 8 Semarang
                        </span>
                    </div> -->
                </div>

                    <div style="margin-top: 80px; margin-right: 70px;">
                        <video autoplay="true" id="video-webcam">
                            ~BLANK~
                        </video>
                    </div>
                <script src="js/tesseract.min.js"></script>
                <script type="text/javascript" >
                 // seleksi elemen video
                    var video = document.querySelector("#video-webcam");

                    // minta izin user
                    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

                    // jika user memberikan izin
                    if (navigator.getUserMedia) {
                        // jalankan fungsi handleVideo, dan videoError jika izin ditolak
                        navigator.getUserMedia({ video: true }, handleVideo, videoError);
                    }

                    // fungsi ini akan dieksekusi jika  izin telah diberikan
                    function handleVideo(stream) {
                        video.srcObject = stream;
                    }

                    // fungsi ini akan dieksekusi kalau user menolak izin
                    function videoError(e) {
                        // do something
                        alert("Please Turn On Your Camera !")
                    }
                    //Snapshot
                    function takeSnapshot() {
                    const {TesseractWorker} = window.Tesseract;
                    const worker = new TesseractWorker();

                    // buat elemen img
                    var img = document.createElement('img');
                    var context;

                    // ambil ukuran video
                    var width = video.offsetWidth
                            , height = video.offsetHeight;

                    // buat elemen canvas
                    canvas = document.createElement('canvas');
                    canvas.width = width;
                    canvas.height = height;

                    // ambil gambar dari video dan masukan 
                    // ke dalam canvas
                    context = canvas.getContext('2d');
                    context.drawImage(video, 0, 0, width, height);

                    // render hasil dari canvas ke elemen img
                    // img.src = canvas.toDataURL('image/png');
                    // img.id = "capturedImage";
                    // document.body.appendChild(img);

                    worker
                    .recognize(
                    'images/foto.jpg',
                    'eng',
                    {
                      tessjs_image_rectangle_left: 0,
                      tessjs_image_rectangle_top: 0,
                      tessjs_image_rectangle_width: 500,
                      tessjs_image_rectangle_height: 250,
                    }
                  )
                  .progress((p) => {
                    console.log('progress', p);
                  })
                  .then(({ text }) => {
                    console.log(text);
                    worker.terminate();
                  });
                    }


                </script>
                <!-- <button onclick="takeSnapshot()"> Scan </button> -->
            </div>
        </div>
    </div>

    
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
<!--===============================================================================================-->

</body>
</html>