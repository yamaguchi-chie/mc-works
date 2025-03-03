<?php get_header(); ?>
<section class="sub-news">
    <div class="sub-news__inner inner">
        <div class="sub-news__title">
        <h1 class="page-title txt"><span>news</span>お知らせ</h1>
        </div>
        <div class="sub-news__body">
            <ul class="sub-news__list">
                <?php if (have_posts()): ?>
                <?php while(have_posts()) : the_post(); ?>
                    <li class="sub-news__item">
                        <article>
                            <div class="sub-news__meta">
                                <time datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                <p class="sub-news__subTl"><?php the_title(); ?></p>
                            </div>
                            <div class="sub-news__contents txt"><?php the_content(); ?></div>
                        </article>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="sub-news__pagenation">
                
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>