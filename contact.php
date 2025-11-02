<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Bigrabit Contact Page">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title>Bigrabit Contact Page</title>
    <link rel="stylesheet preload" href="assets/css/plugins/fontawesome.css" as="style">
    <link rel="stylesheet preload" href="assets/css/plugins/swiper.css" as="style">
    <link rel="stylesheet preload" href="assets/css/plugins/metismenu.css" as="style">
    <link rel="stylesheet preload" href="assets/css/plugins/magnifying-popup.css" as="style">
    <link rel="stylesheet preload" href="assets/css/plugins/odometer.css" as="style">
    <link rel="stylesheet preload" href="assets/css/vendor/bootstrap.min.css" as="style">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet preload" as="style">
    <link rel="preload" as="image" href="assets/images/banner/21.webp" />
    <link rel="stylesheet preload" href="assets/css/style.css" as="style">
</head>


<body class="contact-page">
 <?php include 'header.php'; ?>

    <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Contact</span>
                        <h1 class="title rts-text-anime-style-1">
                            Contact Us
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="assets/images/about/shape/01.png" alt="shape" class="one">
            <img src="assets/images/about/shape/02.png" alt="shape" class="two">
            <img src="assets/images/about/shape/03.png" alt="shape" class="three">
        </div>
    </div>


    <!-- contact areas main -->
    <div class="rts-contact-area-in-page" data-animation="fadeInUp" data-delay="0.2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="contact-info-area-wrapper-p">
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Call Us 24/7</span>
                                <a href="tel:+919870113088">+91-9870113088</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Work with us</span>
                                <a href="#">sales@bigrabit.co.in</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <!-- <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div> -->
                            <div class="info-wrapper">
                                <span>Our Location</span>
                                <a href="#">Unit No. 203, 2nd Floor,
Building No. 6, Millennium Business Park,Sector-3, Mahape, Navi Mumbai - 400710.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="thumbnail-contact-form">
                        <img src="custom/contacthome.jpeg" alt="contact">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-form-p">
                        <form class="form__content" method="post" action="mailer.php" id="contact-form_custom">
                            <h4 class="title">Get In Touch</h4>
                            <input name="name" id="name" type="text" placeholder="Your Name">
                            <input type="email" name="email" id="email" placeholder="Johndoe@gmail.com">
                            <textarea name="message" id="message" placeholder="Message"></textarea>

                            <div id="form-messages"></div>
                            <button class="rts-btn btn-primary" type="submit">Get In Touch</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact areas main end -->

    <!-- map area start -->
    <div class="google-map-area rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7539.886540277394!2d73.00689589357908!3d19.110144500000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c17b1081e3f7%3A0x18c1bab132017ab!2sBuilding%20A-4%2C%20Millennium%20Business%20Park!5e0!3m2!1sen!2sin!4v1749889434852!5m2!1sen!2sin" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- map area end -->









    <!-- rts brand area end -->


    <!-- rts cta area start -->
    <div class="rts-cta-area-inner bg_image ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-inner-content-inner-page">
                        <div class="left-side-content">
                            <span>Subscribe Newsletter</span>
                            <h3 class="title">Stay Updated with <br> the Latest News!</h3>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Enter Email Address">
                            <button class="rts-btn btn-primary btn-white">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts cta area end -->


    <!-- footer area start -->
   <?php include 'footer2.php'; ?>
    <!-- footer area start -->

     <?php include 'sidebarmenu.php'; ?>

    <!-- mobile menu area start -->
   <?php include 'mobilemenu.php'; ?>
    <!-- mobile menu area end -->
</div>
<!-- inner menu area desktop End -->


<!-- offcanvase search -->
<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>
<div id="anywhere-home" class="">
</div>



<!-- progress area start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>
<!-- progress area end -->

<script defer src="assets/js/plugins/jquery.js"></script>

<script defer src="assets/js/plugins/odometer.js"></script>
<script defer src="assets/js/plugins/jquery-appear.js"></script>


<script defer src="assets/js/plugins/gsap.js"></script>
<script defer src="assets/js/plugins/split-text.js"></script>
<script defer src="assets/js/plugins/scroll-trigger.js"></script>
<script defer src="assets/js/plugins/smooth-scroll.js"></script>
<script defer src="assets/js/plugins/metismenu.js"></script>
<script defer src="assets/js/plugins/popup.js"></script>

<script defer src="assets/js/vendor/bootstrap.min.js"></script>
<script defer src="assets/js/plugins/swiper.js"></script>
<script defer src="assets/js/plugins/contact.form.js"></script>

<script defer src="assets/js/main.js"></script>
</body>

</html>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('contact-form_custom');
    if (!form) return;
    var messages = document.getElementById('form-messages');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        messages.innerHTML = '';

        var submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) submitBtn.disabled = true;

        var formData = new FormData(form);

        fetch(form.action || 'mailer.php', {
            method: 'POST',
            body: formData,
            credentials: 'same-origin'
        })
            .then(function (res) { return res.text(); })
            .then(function (text) {
                var data = null;
                try { data = JSON.parse(text); } catch (err) { /* not JSON */ }

                if (data && typeof data.success !== 'undefined') {
                    if (data.success) {
                        messages.innerHTML = '<div class="success">' + (data.message || 'Message sent.') + '</div>';
                        form.reset();
                    } else {
                        messages.innerHTML = '<div class="error">' + (data.message || 'There was an error.') + '</div>';
                    }
                } else {
                    // fallback to plain text response
                    messages.innerHTML = '<div class="success" style="color:green;">Message Sent</div>';
                    form.reset();
                }
            })
            .catch(function () {
                messages.innerHTML = '<div class="error">Request failed. Please try again later.</div>';
            })
            .finally(function () {
                if (submitBtn) submitBtn.disabled = false;
            });
    });
});

</script>