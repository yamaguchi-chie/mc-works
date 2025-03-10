<?php get_header(); ?>
<section class="sub-news">
    <div class="sub-news__inner inner">
        <div class="sub-news__title fade-in">
        <h1 class="page-title txt"><span>news</span>お知らせ</h1>
        </div>
        <div class="sub-news__body">
            <ul class="sub-news__list">
                <?php if (have_posts()): ?>
                <?php while(have_posts()) : the_post(); ?>
                    <li class="sub-news__item fade-in">
                        <article>
                            <div class="sub-news__meta">
                                <time datetime="<?php the_time('c'); ?>"><?php the_modified_date('Y.m.d'); ?></time>
                                <p class="sub-news__subTl"><?php the_title(); ?></p>
                            </div>
                            <div class="sub-news__contents txt"><?php the_content(); ?></div>
                        </article>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="sub-news__pagenation pagination fade-in">
                <?php wp_pagenavi(); ?>
            </div>
            <div class="sub-news__btn fade-in">
                <a href="<?php echo esc_url(home_url()); ?>" class="btn btn--works">TOPへ戻る</a>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>