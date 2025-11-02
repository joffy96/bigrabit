<style>
.bg-title{
    display: none;
}
.rts-breadcrumb-area .title-area-left .title {
    position: relative;
    z-index: 2;
    color: #fff;
    font-size: 42px;
    line-height: 1.23;
    text-shadow: 0 3px 8px rgba(0, 0, 0, 0.7);
}
    .project-details-thumbnail img{
        width: 100%;
        height: auto;
    }
    .main-logo {
        width: 40%;
    }
    .thumbnail {
        min-height: 100px;
      
    }
    @media (max-width: 767px) {
        .main-logo {
            width: 70%;
        }
        .thumbnail {
            min-height: 40px;
        }
    }
</style>

<header class="header-one header--sticky">
    <!-- <div class="header-top-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-one-wrapper">
                        <div class="left">
                            <div class="mail">
                                <a href="mailto:support@bigrabit.co.in">
                                    <i class="fal fa-envelope"></i>
                                    support@bigrabit.co.in
                                </a>
                            </div>
                           
                        </div>
                        <div class="right">
                            <ul class="top-nav">
                                <li><a href="blog-list">Company news</a></li>
                                <li><a href="faq">Faq</a></li>
                                <li><a href="contact">Contact</a></li>
                            </ul>
                            <ul class="social-wrapper-one">
                                <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                <li>
                                    <a class="mr--0" href="#" aria-label="linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-main-one-wrapper">
                        <div class="thumbnail" style="background: #fff;border-radius: 50%;">
                            <a href="index">
                                <img src="assets/images/logo/bigrabit-new.png" class="main-logo" alt="finbiz-logo">
                            </a>
                        </div>
                        <div class="main-header">
                            <div class="nav-area">
                                <ul>
                                    <li class="main-nav  mega-menu project-a-after">
                                        <a href="index">Home</a>
                                    </li>
                                    <li class="main-nav  mega-menu">
                                        <a href="about">Company</a>
                                    </li>
                                    <li class="main-nav has-dropdown mega-menu">
                                        <a href="#">Solutions</a>
                                        <?php include "serviceheader.php" ?>
                                    </li>
                                    <li class="main-nav has-dropdown mega-menu">
                                        <a href="#">Industries</a>
                                        <?php include "verticals.php" ?>
                                    </li>
                                    <li class="main-nav  project-a-after">
                                        <a href="blog">Blogs</a>
                                
                                    </li>
                                </ul>
                            </div>
                            <div class="loader-wrapper">
                                <div class="loader"></div>
                                <div class="loader-section section-left"></div>
                                <div class="loader-section section-right"></div>
                            </div>
                            <div class="button-area">
                             
                                <a href="contact" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">
                                    Contact
                                </a>
                                <button id="menu-btn" aria-label="Menu" class="menu-btn menu ml--20 ml_sm--5">
                                    <img class="menu-light" src="assets/images/icons/01.svg" alt="Menu-icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>