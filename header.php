<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

    <!-- header  -->
   <header class="header js-header">
      <div class="header__inner">
        <div class="header__body">
          <!-- logo  -->
          <h1 class="header__logo">
            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/logo.webp" alt="" width="" height="" loading="lazy" decoding="async"></a>
          </h1>
          <!-- PCナビメニュー -->
          <nav class="header__pc-nav pc-nav">
            <ul class="pc-nav__items">
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url()); ?>">top</a></li>
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("company")); ?>">company</a></li>
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("works")); ?>">works</a></li>
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("news")); ?>">news</a></li>
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("contact")); ?>">contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <!-- ハンバーガーボタン -->
    <button class="header-hamburger js-header-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <!-- ドロワーメニュー -->
    <nav class="sp-nav">
      <ul class="sp-nav__items">
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url()); ?>">top</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("company")); ?>">company</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("works")); ?>">works</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("news")); ?>">news</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("contact")); ?>">contact</a></li>
      </ul>
    </nav>