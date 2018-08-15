<div class="col-lg-8 blog__content mb-72">
    <h1 class="page-title"><?php echo $param['cate_name'];?></h1>
    <?php if (!empty($data)): ?>
    <div class="row card-row">
        <?php foreach ($data as $p): ?>
        <div class="col-md-6">
            <article class="entry card">
                <div class="entry__img-holder card__img-holder">
                    <a href="<?php echo $BASE_URL.'/tin-tuc/'.$p['url']; ?>">
                        <div class="thumb-container thumb-70">
                            <img data-src="<?php echo $p['image'];?>" src="<?php echo $p['image']; ?>" class="entry__img lazyload" alt="<?php echo $p['name']; ?>" />
                        </div>
                    </a>
                    <a href="<?php echo $BASE_URL.'/danh-muc/'.$p['cate_url']; ?>" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange"><?php echo $p['cate_name'];?></a>
                </div>

                <div class="entry__body card__body">
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
                                <?php echo date('M d, Y', $p['created']);?>
                            </li>
                        </ul>
                    </div>
                    <div class="entry__excerpt">
                        <?php echo $p['description']; ?>
                    </div>
                </div>
            </article>
        </div>
        <?php endforeach; ?>
        
    </div>
    <?php endif; ?>
    

    <!-- Pagination -->
    <nav class="pagination">
        <span class="pagination__page pagination__page--current">1</span>
        <a href="#" class="pagination__page">2</a>
        <a href="#" class="pagination__page">3</a>
        <a href="#" class="pagination__page">4</a>
        <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
    </nav>
</div>