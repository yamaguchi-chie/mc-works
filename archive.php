<?php get_header(); ?>

<section class="works">
    <div class="works__inner inner">
        <div class="works__title">
        <h1 class="page-title txt"><span>works</span>施工実績</h1>
        </div>
        <div class="works__body">
            <ul class="works__list">
                <?php $args = array(
                'post_type' => 'works',
                'posts_per_page' => 6,
                'order' => 'DESC',
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()):
                while($the_query->have_posts()) :
                $the_query->the_post(); ?>
                <li class="works__item">
                    <a href="<?php the_permalink(); ?>" class="works__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/works/1.webp" alt="" width="524" height="323" loading="lazy" decoding="async">
                        <div class="works__contents">
                            <p class="works__subTl"><?php the_title(); ?></p>
                        </div>
                    </a>
                </li>
                <?php endwhile; endif; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</section>


<?php get_footer(); ?>