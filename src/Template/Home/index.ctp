<!-- Posts -->
<div class="col-lg-8 blog__content">

    <!-- News by Categories -->
    <section class="section mb-16">
        <!--            <div class="title-wrap">
                        <h3 class="section-title">news by categories</h3>
                    </div>-->

        <div class="row">
            <?php if (!empty($posts)): ?>
                <?php foreach ($posts as $post): ?>
                    <div class="col-md-6">
                        <?php foreach ($post as $k => $p): ?>
                            <?php if ($k == 0): ?>
                                <article class="entry">
                                    <ul class="entry__meta">
                                        <li class="entry__meta-category">
                                            <a href="<?php echo $BASE_URL . '/danh-muc/' . $p['cate_url']; ?>"><?php echo $p['cate_name']; ?></a>
                                        </li>
                                    </ul>
                                    <div class="entry__img-holder">
                                        <a href="<?php echo $BASE_URL . '/tin-tuc/' . $p['url']; ?>">
                                            <div class="thumb-container thumb-75">
                                                <img data-src="<?php echo $p['image']; ?>" src="<?php echo $p['image']; ?>" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="entry__body">
                                        <div class="entry__header">
                                            <h2 class="entry__title">
                                                <a href="<?php echo $BASE_URL . '/tin-tuc/' . $p['url']; ?>"><?php echo $p['name']; ?></a>
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
                                <ul class="post-list-small post-list-small--3">
                                <?php else: ?>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry clearfix">
                                            <div class="post-list-small__img-holder">
                                                <div class="thumb-container thumb-80">
                                                    <a href="<?php echo $BASE_URL . '/tin-tuc/' . $p['url']; ?>">
                                                        <img data-src="<?php echo $p['image']; ?>" src="<?php echo $p['image']; ?>" alt="" class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="<?php echo $BASE_URL . '/tin-tuc/' . $p['url']; ?>"><?php echo $p['name']; ?></a>
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
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </section> <!-- end news by categories -->

</div> <!-- end posts -->
