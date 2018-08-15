<div class="col-lg-8 blog__content mb-72">
    <div class="content-box content-box--top-offset">

        <!-- standard post -->
        <article class="entry mb-0">

            <div class="single-post__entry-header entry__header">
                <ul class="entry__meta">
                    <li class="entry__meta-category">
                        <a href="<?php echo $BASE_URL . '/danh-muc/' . $data['cate_url']; ?>"><?php echo $data['cate_name']; ?></a>
                    </li>              
                </ul>
                <h1 class="single-post__entry-title">
                    <?php echo $data['name']; ?>
                </h1>
                <div class="entry__meta-holder">
                    <ul class="entry__meta">
                        <li class="entry__meta-author">
                            <span>by</span>
                            <a href="#">HoangAnhOnline</a>
                        </li>
                    </ul>

                    <ul class="entry__meta">
                        <li class="entry__meta-views">
                            <i class="ui-eye"></i>
                            <span>1356</span>
                        </li>
                        <li class="entry__meta-comments">
                            <a href="#">
                                <i class="ui-chat-empty"></i>13
                            </a>
                        </li>
                    </ul>
                </div>
            </div> <!-- end entry header -->              

            <div class="entry__article-wrap">

                <div class="entry__article">
                    <?php echo $data['content']; ?>
                    <!-- tags -->
                    <div class="entry__tags">
                        <i class="ui-tags"></i>
                        <span class="entry__tags-label">Tags:</span>
                        <a href="#" rel="tag">mobile</a><a href="#" rel="tag">gadgets</a><a href="#" rel="tag">satelite</a>
                    </div> <!-- end tags -->
                </div> <!-- end entry article -->
            </div> <!-- end entry article wrap -->


            <!-- Newsletter Wide -->
            <div class="newsletter-wide">
                <div class="widget widget_mc4wp_form_widget">
                    <div class="newsletter-wide__container">
                        <div class="newsletter-wide__text-holder">
                            <p class="newsletter-wide__text">
                                <i class="ui-email newsletter__icon"></i>
                                Subscribe for our daily news
                            </p>
                        </div>
                        <div class="newsletter-wide__form">
                            <form class="mc4wp-form" method="post">
                                <div class="mc4wp-form-fields">
                                    <div class="form-group">
                                        <input type="email" name="EMAIL" placeholder="Your email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-color" value="Sign Up">
                                    </div>
                                </div>
                            </form>
                        </div> 
                    </div>         
                </div>
            </div> <!-- end newsletter wide -->

            <!-- Prev / Next Post -->
<!--            <nav class="entry-navigation">
                <div class="clearfix">
                    <div class="entry-navigation--left">
                        <i class="ui-arrow-left"></i>
                        <span class="entry-navigation__label">Previous Post</span>
                        <div class="entry-navigation__link">
                            <a href="#" rel="next">How to design your first mobile app</a>
                        </div>
                    </div>
                    <div class="entry-navigation--right">
                        <span class="entry-navigation__label">Next Post</span>
                        <i class="ui-arrow-right"></i>
                        <div class="entry-navigation__link">
                            <a href="#" rel="prev">Video Youtube format post. Made with WordPress</a>
                        </div>
                    </div>
                </div>
            </nav>-->

            <!-- Author -->
            <div class="entry-author clearfix">
                <img alt="" data-src="img/content/single/author.jpg" src="img/empty.png" class="avatar lazyload">
                <div class="entry-author__info">
                    <h6 class="entry-author__name">
                        <a href="#">John Carpet</a>
                    </h6>
                    <p class="mb-0">But unfortunately for most of us our role as gardener has never been explained to us. And in misunderstanding our role, we have allowed seeds of all types, both good and bad, to enter our inner garden.</p>
                </div>
            </div>              

            <!-- Related Posts -->
            <?php if (!empty($data['relations'])): ?>
            <section class="section related-posts mt-40 mb-0">
                <div class="title-wrap title-wrap--line title-wrap--pr">
                    <h3 class="section-title"><?php echo __('LABEL_RELATED_POST');?></h3>
                </div>

                <!-- Slider -->
                <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                    <?php foreach ($data['relations'] as $rp): ?>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo $rp['image']; ?>');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">   
                                <h2 class="thumb-entry-title">
                                    <a href="<?php echo $BASE_URL.'/tin-tuc/'.$rp['url'];?>"><?php echo $rp['name']; ?></a>
                                </h2>
                            </div>
                            <a href="<?php echo $BASE_URL.'/tin-tuc/'.$rp['url'];?>" class="thumb-url"></a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div> <!-- end slider -->
            </section> 
            <?php endif; ?>
            <!-- end related posts -->            

        </article> <!-- end standard post -->

    </div> <!-- end content box -->
</div>