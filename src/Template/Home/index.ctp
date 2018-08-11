<div id="primary" class="content-area column">

    <!-- Featured Content / Start -->
    <div id="featured-content" class="category-box clearfix">
        <?php if (!empty($latest_post)): ?>
        <div id="news-ticker" class="clearfix">
            <span class="text">Headlines</span>
            <ul class="news-list">
                <?php foreach ($latest_post as $p): ?>
                <li class="news-item">
                    <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>" rel="bookmark"><?php echo $p['name'];?></a>
                </li>
                <?php endforeach; ?>													
            </ul>
            <span class="headline-nav">
                <a class="headline-prev" href="#"><i class="fa fa-angle-left"></i></a>
                <a class="headline-next" href="#"><i class="fa fa-angle-right"></i></a>
            </span><!-- headline-nav -->
        </div><!-- .news-ticker -->
        <?php endif; ?>
        
        <?php if (!empty($data['sliders'])): ?>
        <div id="carousel-0" class="jcarousel">

            <ul>
                <?php foreach ($data['sliders'] as $s): ?>
                <li>
                    <article class="hentry clearfix">
                        <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><img class="entry-thumbnail" src="<?php echo $s['image']; ?>" width="728" height="410" alt="<?php echo $s['name']; ?>"/></a>
                        <h2 class="entry-title"><a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>" rel="bookmark"><?php echo $s['name']; ?></a></h2>
                        <div class="entry-meta">
                            <span class="entry-stars"></span>				
                            <span class="entry-date"><?php echo date('d-m-Y', $s['created']); ?></span>
                            <span class="entry-comments"><a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>#comments">5 Comments</a></span>
                        </div><!-- .entry-meta -->	
                        <div class="entry-summary">
                            <?php echo $s['description']; ?>				
                        </div><!-- .entry-summary -->

                        <div class="more-link">
                            <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><?php echo __('LABEL_VIEW_DETAIL');?></a>
                        </div><!-- .more-link -->

                    </article><!-- .hentry -->
                </li><!-- slide #1 -->
                <?php endforeach; ?>

            </ul>

            <p class="jcarousel-pagination-0"></p>		

            <a href="#" class="jcarousel-control-prev"><i class="fa fa-chevron-left"></i></a>
            <a href="#" class="jcarousel-control-next"><i class="fa fa-chevron-right"></i></a>						

        </div><!-- #carousel-0 -->
        <?php endif; ?>
        

    </div>
    <!-- Featured Content / End -->
    
    <?php if (!empty($latest_post)): ?>
    <!-- Content Block #1 / Start -->
    <section class="content-block-1 category-box clearfix">

        <h3 class="section-title"><a href="category.html"><?php echo __('LABEL_LATEST_NEWS');?></a><span class="see-all"><a href="category.html">More</a></span></h3>

        <ul class="clearfix">
            <?php foreach ($latest_post as $p): ?>
            <li>
                <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><img class="entry-thumbnail" src="<?php echo $p['image'];?>" width="216" height="121" alt="<?php echo $p['name'];?>"/></a>   

                <h2 class="entry-title"><a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><?php echo $p['name'];?></a></h2>

                <div class="entry-meta">
                    <span class="entry-date"><?php echo date('d-m-Y', $p['created']);?></span>
                    <span class="entry-comments"><a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>#comments">3 Comments</a></span>                    
                </div><!-- .entry-meta -->                   

                <div class="entry-summary">
                    <?php echo $p['description'];?>
                </div><!-- .entry-summary -->

                <div class="more-link">
                    <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><?php echo __('LABEL_VIEW_DETAIL');?></a>
                </div><!-- .more-link -->
            </li>
            <?php endforeach; ?>
        </ul>

    </section>
    <!-- Content Block #1 / End -->
    <?php endif; ?>
    

    <div class="content-ad">
        <a href="http://www.theme-junkie.com/"><img src="http://placehold.it/728x90" alt="Post Title"/></a>
    </div><!-- .content-ad -->

    <?php if (!empty($breaking_news)): ?>
    <!-- Content Block #2 / Start -->
    <section class="content-block-2 category-box clearfix">

        <h3 class="section-title"><a href="category.html"><?php echo __('LABEL_BREAKING_NEWS');?></a> <span class="see-all"><a href="category.html">More</a></span></h3>

        <ul>
            <?php foreach ($breaking_news as $k => $p): ?>
            <?php if ($k == 0): ?>
            <li class="article-first">

                <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><img class="entry-thumbnail" src="<?php echo $p['image']; ?>" alt="<?php echo $p['name'];?>"/></a>

                <h2 class="entry-title"><a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><?php echo $p['name'];?></a></h2>

                <div class="entry-meta">
                    <span class="entry-stars"></span>				
                    <span class="entry-date"><?php echo date('d-m-Y', $p['created']);?></span>
                    <span class="entry-comments"><a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>#comments">3 Comments</a></span>					
                </div><!-- .entry-meta -->

                <div class="entry-summary">
                    <?php echo $p['description'];?>
                </div><!-- .entry-summary -->

                <div class="more-link">
                    <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><?php echo __('LABEL_VIEW_DETAIL');?></a>
                </div><!-- .more-link -->

            </li><!-- .article-first -->
            <?php else: ?>
            <li class="article-list">

                <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><img class="entry-thumbnail" src="<?php echo $p['image']; ?>" width="52" height="52" alt=""/></a>

                <h2 class="entry-title"><a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><?php echo $p['name'];?></a></h2>

                <div class="entry-meta">
                    <span class="entry-stars"></span>				
                    <span class="entry-date"><?php echo date('d-m-Y', $p['created']);?></span>
                    <span class="entry-comments"><a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>#comments">3 Comments</a></span>		
                </div><!-- .entry-meta -->

            </li><!-- .article-list -->
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>

    </section>
    <!-- Content Block #2 / End -->
    <?php endif; ?>

    <div class="content-ad">
        <a href="http://www.theme-junkie.com/"><img src="http://placehold.it/728x90" alt=""/></a>
    </div><!-- .content-ad --> 

    <!-- Content Block #3 / Start -->
    <section class="content-block-3 category-box clearfix">

        <div class="block block-left">

            <h3 class="section-title"><a href="category.html">World News</a><span class="see-all"><a href="category.html">More</a></span></h3>

            <ul>

                <li class="article-first">

                    <a href="post.html"><img class="entry-thumbnail" src="http://placehold.it/344x193" alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">USA locations for sunrise sunset calendar</a></h2>

                    <div class="entry-meta">
                        <span class="entry-stars"></span>        
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                    </div><!-- .entry-meta -->

                    <div class="entry-summary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet...
                    </div><!-- .entry-summary -->

                    <div class="more-link">
                        <a href="post.html">Read the rest of this entry</a>
                    </div><!-- .more-link -->

                </li><!-- .article-first -->

                <li class="article-list clearfix">

                    <a href="post.html"><img class="entry-thumbnail" src="http://placehold.it/52x52" alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">The world's best photos of hippotigris</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                    </div><!-- .entry-meta -->

                </li><!-- .article-list -->

                <li class="article-list clearfix">

                    <a href="post.html"><img class="entry-thumbnail" src="http://placehold.it/52x52" alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">Dell attempts to reinvent the desktop PC</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                    </div><!-- .entry-meta -->

                </li><!-- .article-list -->

                <li class="article-list clearfix">

                    <a href="post.html"><img class="entry-thumbnail" src="http://placehold.it/52x52" alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">The "Love Actually" guide to London</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                    </div><!-- .entry-meta -->

                </li><!-- .article-list -->

            </ul>

        </div><!-- .block .block-left -->

        <div class="block block-right">

            <h3 class="section-title"><a href="category.html">Business</a><span class="see-all"><a href="category.html">More</a></span></h3>

            <ul>

                <li class="article-first">

                    <a href="post.html"><img class="entry-thumbnail" src="http://placehold.it/344x193" alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">5 Unusual ways to stay fit and active</a></h2>

                    <div class="entry-meta">
                        <span class="entry-stars"></span>        
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                    </div><!-- .entry-meta -->

                    <div class="entry-summary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet...
                    </div><!-- .entry-summary -->

                    <div class="more-link">
                        <a href="post.html">Read the rest of this entry</a>
                    </div><!-- .more-link -->

                </li><!-- .article-first -->

                <li class="article-list clearfix">

                    <a href="post.html"><img class="entry-thumbnail" src="http://placehold.it/52x52" alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">Robbie take long road to graduation</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                    </div><!-- .entry-meta -->

                </li><!-- .article-list -->

                <li class="article-list clearfix">

                    <a href="post.html"><img class="entry-thumbnail" src="http://placehold.it/52x52" alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">Lake Oahe's population improves</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                    </div><!-- .entry-meta -->

                </li><!-- .article-list -->

                <li class="article-list clearfix">

                    <a href="post.html"><img class="entry-thumbnail" src="http://placehold.it/52x52" alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">Missing Fryeburg woman returns home</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                    </div><!-- .entry-meta -->

                </li><!-- .article-list -->

            </ul>

        </div><!-- .block .block-right -->

    </section>
    <!-- Content Block #3 / End -->

    <div class="content-ad">
        <a href="#"><img src="http://placehold.it/728x90" alt=""/></a>
    </div><!-- .content-ad -->

    <!-- Content Block #4 / Start -->
    <section class="content-block-4 category-box clearfix">

        <div class="block block-left">

            <h3 class="section-title"><a href="category.html">Travel</a><span class="see-all"><a href="category.html">More</a></span></h3>

            <ul>
                <li class="article-first">

                    <a href="post.html"><img class="entry-thumbnail" src="http://placehold.it/216x121" alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">Tips for getting started in travel writing</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>		
                    </div><!-- .entry-meta -->

                    <div class="entry-summary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...
                    </div><!-- .entry-summary -->

                    <div class="more-link">
                        <a href="post.html">Read the rest of this entry</a>
                    </div><!-- .more-link -->

                </li><!-- .article-first -->

                <li class="article-list">
                    <h2 class="entry-title"><a href="post.html">Football, made from a plane</a></h2>
                </li><!-- .article-list -->

                <li class="article-list">
                    <h2 class="entry-title"><a href="post.html">Be a cowboy, save a horse</a></h2>
                </li><!-- .article-list -->

                <li class="article-list">
                    <h2 class="entry-title"><a href="post.html">Seat reclining sparks skirmish</a></h2>
                </li><!-- .article-list -->
            </ul>

        </div><!-- .block .block-left -->

        <div class="block block-center">

            <h3 class="section-title"><a href="category.html">Lifestyle</a><span class="see-all"><a href="category.html">More</a></span></h3>

            <ul>
                <li class="article-first">

                    <a href="post.html"><img class="entry-thumbnail" src="http://placehold.it/216x121" alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">4 Surprising health benefits of tea</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>		
                    </div><!-- .entry-meta -->

                    <div class="entry-summary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...
                    </div><!-- .entry-summary -->

                    <div class="more-link">
                        <a href="post.html">Read the rest of this entry</a>
                    </div><!-- .more-link -->

                </li><!-- .article-first -->

                <li class="article-list">
                    <h2 class="entry-title"><a href="post.html">Sculptures as thin as a hair</a></h2>
                </li><!-- .article-list -->

                <li class="article-list">
                    <h2 class="entry-title"><a href="post.html">Trieste, the city of fashion</a></h2>
                </li><!-- .article-list -->

                <li class="article-list">
                    <h2 class="entry-title"><a href="post.html">World's most stylish bookstores</a></h2>
                </li><!-- .article-list -->
            </ul>

        </div><!-- .block .block-center -->

        <div class="block block-right">

            <h3 class="section-title"><a href="category.html">Culture</a><span class="see-all"><a href="category.html">More</a></span></h3>	

            <ul>
                <li class="article-first">

                    <a href="post.html"><img class="entry-thumbnail" src="http://placehold.it/216x121" alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">The world's best hotel restaurants in 2014</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>		
                    </div><!-- .entry-meta -->

                    <div class="entry-summary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...
                    </div><!-- .entry-summary -->

                    <div class="more-link">
                        <a href="post.html">Read the rest of this entry</a>
                    </div><!-- .more-link -->

                </li><!-- .article-first -->

                <li class="article-list">
                    <h2 class="entry-title"><a href="post.html">19 ways to blow your bonus</a></h2>
                </li><!-- .article-list -->

                <li class="article-list">
                    <h2 class="entry-title"><a href="post.html">Best Los Angeles theme bars</a></h2>
                </li><!-- .article-list -->

                <li class="article-list">
                    <h2 class="entry-title"><a href="post.html">Africa's best places to eat</a></h2>
                </li><!-- .article-list -->
            </ul>

        </div><!-- .block .block-right -->

    </section>
    <!-- Content Block #4 / End -->

</div>