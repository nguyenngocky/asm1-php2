<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/eefcbcdd05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= ADMIN_ASSET . 'style.css' ?>">


</head>

<body>

    <!-- Simulate a smartphone / tablet look -->
    <div class="container">
        <div class="header">
            <!-- Top Navigation Menu -->
            <div class="topnav">
                <a href="#home" class="active">Logo</a>
                <div class="menu"><a href="<?= BASE_URL . 'mon-hoc' ?>">Môn Học</a>
                    <a href="<?= BASE_URL . 'quiz' ?>">Quizs</a>
                </div>

                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <!-- End smartphone / tablet look -->

        </div>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="<?= IMG_URL . 'banner1.jpg' ?>" alt="">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="<?= IMG_URL . 'banner2.jpg' ?>" alt="">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="<?= IMG_URL . 'banner3.jpeg' ?>" alt="">
                <div class="text"></div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    <div id="myLinks" style="display: none">
        <?php
        if (isset($_SESSION['user'])) {
        ?>
             <h2>
            Xin chào <?=$_SESSION['name']?>
            </h2>
            <a href="<?= BASE_URL . 'tai-khoan/cap-nhat' ?>"><i class="fas fa-user"></i>Cập Nhật Tài Khoản</a>
            <a href="<?= BASE_URL . 'thoat' ?>"><i class="fas fa-sign-out-alt"></i>Thoát</a>

        <?php } else { ?>
            <a href="<?= BASE_URL . 'tai-khoan/dang-nhap' ?>">Đăng Nhập</a>
            <a href="<?= BASE_URL . 'tai-khoan/dang-ki' ?>">Đăng Kí</a>
            <a href="<?= BASE_URL . 'tai-khoan/dang-nhap' ?>">Quên Mật Khẩu</a>

        <?php } ?>
    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

</body>