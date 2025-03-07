</main>
<footer class="footer">
  <div class="footer__inner inner">
    <nav class="footer__nav">
      <ul class="footer__items">
        <li class="footer__item"><a href="<?php echo esc_url(home_url()); ?>">top</a></li>
        <li class="footer__item"><a href="<?php echo esc_url(home_url("company")); ?>">会社案内</a></li>
        <li class="footer__item"><a href="<?php echo esc_url(home_url("works")); ?>">施工実績</a></li>
        <li class="footer__item"><a href="<?php echo esc_url(home_url("info")); ?>">お知らせ</a></li>
        <li class="footer__item"><a href="<?php echo esc_url(home_url("contact")); ?>">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class="footer__body">
      <div class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/logo.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
      <dl class="footer__adress">
        <div>
          <dt class="footer__text">Head Office</dt>
          <dd class="footer__text">〒916-0085　福井県鯖江市大倉町17-2-3</dd>
        </div>
        <div>
          <dt class="footer__text">Branch Office</dt>
          <dd class="footer__text">〒918-8067　福井県福井市飯塚町8-133</dd>
        </div>
      </dl>
    </div>
    <div class="footer__copyright">
      <small>&copy;MC Works</small>
    </div>
  </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
