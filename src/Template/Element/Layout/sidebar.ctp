<aside class="col-lg-4 sidebar sidebar--right">

    <!-- Widget Socials -->
    <aside class="widget widget-socials">
        <h4 class="widget-title">Let's hang out on social</h4>
        <div class="socials socials--wide socials--large">
            <div class="row row-16">
                <div class="col">
                    <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                        <i class="ui-facebook"></i>
                        <span class="social__text">Facebook</span>
                    </a><!--
                    --><a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                        <i class="ui-twitter"></i>
                        <span class="social__text">Twitter</span>
                    </a><!--
                    --><a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube">
                        <i class="ui-youtube"></i>
                        <span class="social__text">Youtube</span>
                    </a>
                </div>
                <div class="col">
                    <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                        <i class="ui-google"></i>
                        <span class="social__text">Google+</span>
                    </a><!--
                    --><a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram">
                        <i class="ui-instagram"></i>
                        <span class="social__text">Instagram</span>
                    </a><!--
                    --><a class="social social-rss" href="#" title="rss" target="_blank" aria-label="rss">
                        <i class="ui-rss"></i>
                        <span class="social__text">Rss</span>
                    </a>
                </div>                
            </div>            
        </div>
    </aside> <!-- end widget socials -->

    <!-- Widget Popular Posts -->
    <?php if (!empty($breaking_news)): ?>
    
    <aside class="widget widget-popular-posts">
        <h4 class="widget-title"><?php echo __('LABEL_BREAKING_NEWS');?></h4>
        <ul class="post-list-small">
            <?php foreach ($breaking_news as $p): ?>
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-100">
                            <a href="<?php echo $BASE_URL.'/tin-tuc/'.$p['url'];?>">
                                <img data-src="<?php echo $p['image']; ?>" src="<?php echo $p['image']; ?>" alt="<?php echo $p['name']; ?>" class="post-list-small__img--rounded lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="<?php echo $BASE_URL.'/tin-tuc/'.$p['url'];?>"><?php echo $p['name']; ?></a>
                        </h3>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <span>by</span>
                                <a href="#">HoangAnhOnline</a>
                            </li>
                            <li class="entry__meta-date">
                                <?php echo date('M d, Y', $p['created']); ?>
                            </li>
                        </ul>
                    </div>                  
                </article>
            </li>
            <?php endforeach; ?>
            
        </ul>           
    </aside> 
    <?php endif; ?>
    <!-- end widget popular posts -->

    <!-- Widget Reviews -->
    <?php if (!empty($latest_post)): ?>
    <aside class="widget widget-review-posts">
        <h4 class="widget-title"><?php echo __('LABEL_LATEST_NEWS');?></h4>
        <?php foreach ($latest_post as $p): ?>
        <article class="entry">
            <div class="entry__img-holder">
                <a href="<?php echo $BASE_URL.'/tin-tuc/'.$p['url']; ?>">
                    <div class="thumb-container thumb-60">
                        <img data-src="<?php echo $p['image']; ?>" src="<?php echo $p['image']; ?>" class="entry__img lazyload" alt="<?php echo $p['name']; ?>">
                        <!--<span class="entry-score">9.2</span>-->
                    </div>
                </a>
            </div>

            <div class="entry__body">
                <div class="entry__header">                  
                    <h2 class="entry__title">
                        <a href="<?php echo $BASE_URL.'/tin-tuc/'.$p['url']; ?>"><?php echo $p['name']; ?></a>
                    </h2>
                    <ul class="entry__meta">
                        <li class="entry__meta-author">
                            <span>by</span>
                            <a href="#">HoangAnhOnline</a>
                        </li>
                        <li class="entry__meta-date">
                            <?php echo date('M d, Y', $p['created']); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        <?php endforeach; ?>
        <button class="btn btn-lg btn-light btn-wide load-more">
            <span><?php echo __('LABEL_VIEW_MORE');?> <i class="ui-arrow-down"></i></span>
        </button>
    </aside> 
    <?php endif; ?>
    <!-- end widget reviews -->     

</aside>