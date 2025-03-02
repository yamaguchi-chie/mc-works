<?php get_header(); ?>

<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/logo_big.svg" alt="" width="" height="" loading="lazy" decoding="async"></div>


<section class="top-news">
    <div class="top-news__inner inner">
        <div class="top-news__title">
            <h2 class="section-title"><span>news</span>お知らせ</h2>
        </div>
        <ul class="top-news__items">
            <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'order' => 'DESC',
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()):
            while($the_query->have_posts()) :
            $the_query->the_post(); ?>
                <li class="top-news__item">
                    <div class="top-news__meta">
                        <time datetime="<?php the_time('c'); ?>" class="top-news__time"><?php the_time('Y.n.j'); ?></time>
                    </div>
                    <div class="news__contents">
                        <p class="top-news__txt txt"><?php the_content(); ?></p>
                    </div>
                </li>
            <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
        <div class="top-news__btn">
            <a href="<?php echo esc_url(home_url("news")); ?>" class="btn btn--contact">more</a>
        </div>
    </div>
</section>



<?php get_footer(); ?>