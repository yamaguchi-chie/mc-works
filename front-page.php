<?php get_header(); ?>

<div class="logo fade-in"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/logo_big.webp" alt="mc-worksのロゴを表した画像" width="" height="" loading="lazy" decoding="async"></div>


<section class="top-news">
    <div class="top-news__inner inner">
        <div class="top-news__title fade-in">
            <h2 class="section-title txt"><span>news</span>お知らせ</h2>
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
                <li class="top-news__item fade-in">
                    <div class="top-news__meta">
                        <time datetime="<?php the_time('c'); ?>" class="top-news__time"><?php the_time('Y.m.d'); ?></time>
                    </div>
                    <div class="news__contents">
                        <p class="top-news__txt txt"><?php
                        if ( mb_strlen( $post->post_title, 'UTF-8' ) > 30 ) {
                        $title = mb_substr( $post->post_title, 0, 30, 'UTF-8' );
                            echo $title . '…';
                        } else {
                            echo $post->post_title;
                        }
                        ?></p>
                    </div>
                </li>
            <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
        <div class="top-news__btn fade-in">
            <a href="<?php echo esc_url(home_url("news")); ?>" class="btn btn--contact">more</a>
        </div>
    </div>
</section>

<?php get_template_part('template/contact'); ?>

<?php get_footer(); ?>