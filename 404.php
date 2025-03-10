<?php get_header(); ?>

<div class="logo fade-in"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/logo_big.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>

 <section class="not-found">
  <div class="not-found__inner inner">
    <h1 class="not-found__title fade-in">お探しのページは<br class="u-mobile">見つかりませんでした。</h1>
    <div class="not-found__btn fade-in">
      <a class="btn btn--not-found" href="<?php echo esc_url(home_url()); ?>">TOPへ戻る</a>
    </div>
  </div>
 </section>

<?php get_footer(); ?>
