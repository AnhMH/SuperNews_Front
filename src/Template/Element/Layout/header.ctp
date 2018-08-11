<header id="masthead" class="site-header container clearfix" role="banner">

    <div id="primary-bar" class="clearfix">

        <a id="primary-mobile-menu" href="#"><i class="fa fa-bars"></i> Primary Menu</a>

        <!-- Primary Navigation / Start -->
        <nav id="primary-nav">

            <ul id="primary-menu" class="sf-menu">
                <li><a href="about.html">About</a></li>
                <li><a href="typography.html">Typography</a></li>
            </ul>

        </nav>
        <!-- Primary Navigation / End -->				

    </div><!-- #primary-bar -->	

    <div id="logo">
        <!--<a href="index.html"><img src="images/logo.png" alt="Logo Title" /></a>-->
         <h1 class="site-title"><a href="index.html">SuperNews</a></h1> 
    </div>

    <div class="header-ad">
        <a href="#"><img src="http://placehold.it/728x90" alt=""/></a>
    </div>

    <div class="clearfix"></div>

    <!-- Secondary Bar / Start -->
    <div id="secondary-bar" class="clearfix">

        <a id="secondary-mobile-menu" href="#"><i class="fa fa-bars"></i> <span>Secondary Menu</span></a>

        <!-- Secondary Navigation / Start -->
        <nav id="secondary-nav">
            <ul id="secondary-menu" class="sf-menu">
                <li class="home_item current_item"><a href="<?php echo $BASE_URL;?>"><i class="fa fa-home"></i> Home</a></li>
                <?php foreach($cates as $c): ?>
                <?php if($c['root_id'] == 0): ?>
                <li><a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $c['url'];?>"><?php echo $c['name'];?></a></li>
                <?php endif; endforeach; ?>
                
            </ul>
        </nav>
        <!-- Secondary Navigation / End -->

        <div class="header-search">

            <i class="fa fa-search"></i>
            <i class="fa fa-times"></i>

            <div class="search-form">
                <form action="search.html" id="searchform" method="get">
                    <input name="s" type="text" />
                    <button type="submit">Search</button>
                </form>
            </div><!-- .search-form -->		  

        </div><!-- .header-search -->		

    </div>	
    <!-- Secondary Bar / End -->

</header>
