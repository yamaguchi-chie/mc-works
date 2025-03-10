</main>
<footer class="footer">
  <div class="footer__inner inner">
    <nav class="footer__nav">
      <ul class="footer__items">
        <li class="footer__item fade-in"><a href="<?php echo esc_url(home_url()); ?>">top</a></li>
        <li class="footer__item fade-in"><a href="<?php echo esc_url(home_url("company")); ?>">会社案内</a></li>
        <li class="footer__item fade-in"><a href="<?php echo esc_url(home_url("works")); ?>">施工実績</a></li>
        <li class="footer__item fade-in"><a href="<?php echo esc_url(home_url("news")); ?>">お知らせ</a></li>
        <li class="footer__item fade-in"><a href="<?php echo esc_url(home_url("contact")); ?>">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class="footer__body">
      <div class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/logo.webp" alt="mc-worksのロゴを表した画像" width="" height="" loading="lazy" decoding="async"></div>
      <dl class="footer__adress">
        <div class="">
          <dt class="footer__text">Head Office</dt>
          <dd class="footer__text">〒916-0085　福井県鯖江市大倉町17-2-3</dd>
        </div>
        <div class="">
          <dt class="footer__text">Branch Office</dt>
          <dd class="footer__text">〒918-8067　福井県福井市飯塚町8-133</dd>
        </div>
      </dl>
    </div>
    <p class="footer__copyright">
      &copy;MC Works
    </p>
  </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
