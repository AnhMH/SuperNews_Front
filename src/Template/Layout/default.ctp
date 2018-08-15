<!DOCTYPE html>
<html lang="vi">
    <head>
        <?php echo $this->element('Layout/head'); ?>
    </head>

    <body class="style-games">

        <!-- Preloader -->
        <div class="loader-mask">
            <div class="loader">
                <div></div>
            </div>
        </div>

        <!-- Bg Overlay -->
        <div class="content-overlay"></div>

        <!-- Sidenav -->    
        <?php echo $this->element('Layout/header'); ?>
        <!-- end sidenav -->

        <main class="main oh" id="main">

            <?php echo $this->element('Layout/navbar'); ?>

            <?php if (!empty($data['sliders'])): ?>
                <!-- Hero Slider -->
                <section class="hero-slider">
                    <div id="owl-hero-slider" class="owl-carousel owl-theme">
                        <?php foreach ($data['sliders'] as $s): ?>
                            <div class="hero-slider__item">
                                <article class="entry thumb">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo $s['image']; ?>');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--2">   
                                            <h2 class="thumb-entry-title">
                                                <a href="<?php echo $BASE_URL . '/tin-tuc/' . $s['url']; ?>"><?php echo $s['name']; ?></a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>by</span>
                                                    <a href="#">HoangAnhOnline</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    <?php echo date('M d, Y', $s['created']); ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="<?php echo $BASE_URL . '/tin-tuc/' . $s['url']; ?>" class="thumb-url"></a>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>


                    </div>
                </section> <!-- end hero slider -->
            <?php endif; ?>

            <div class="main-container container pt-24" id="main-container">
                <!-- Ad Banner 970 -->
                <div class="text-center pb-48">
                    <a href="#">
                        <img src="<?php echo $BASE_URL; ?>/img/content/placeholder_970.jpg" alt="">
                    </a>
                </div> 

                <!-- Content -->
                <div class="row">
                    <?php echo $this->fetch('content'); ?>

                    <!-- Sidebar -->
                    <?php echo $this->element('Layout/sidebar'); ?>
                    <!-- end sidebar -->
                </div>
            </div> <!-- end main container -->

            <!-- Footer -->
            <?php echo $this->element('Layout/footer'); ?> 
            <!-- end footer -->

            <div id="back-to-top">
                <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
            </div>

        </main> <!-- end main-wrapper -->


        <!-- jQuery Scripts -->
        <script src="<?php echo $BASE_URL; ?>/js/jquery.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/easing.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/owl-carousel.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/flickity.pkgd.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/twitterFetcher_min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/jquery.newsTicker.min.js"></script>  
        <script src="<?php echo $BASE_URL; ?>/js/modernizr.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/scripts.js"></script>

    </body>
</html>