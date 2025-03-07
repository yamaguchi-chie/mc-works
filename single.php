<?php get_header(); ?>
<section class="detail-works">
    <div class="detail-works__inner inner">
        <div class="detail-works__title">
            <h1 class="page-title txt"><span>works</span>会社案内</h1>
        </div>
        <div class="detail-works__body">
          <h2 class="detail-works__subTl"><?php the_title(); ?></h2>
          <div class="detail-works__thumbs">
            <?php if(has_post_thumbnail()){
            the_post_thumbnail('full', array('alt' => get_the_title()));
            }else{ ;?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/no_image.jpg" alt="no image">
            <?php } ;?>
          </div>
            <dl class="detail-works__label">
              <div class="detail-works__item">
                  <dt class="detail-works__left">
                      <p class="txt">所在地 : </p>
                  </dt>
                  <dd class="detail-works__right">
                      <p class="txt">
                        <?php $adress = get_field('adress');
                        if($adress): ?>
                            <?php echo the_field('adress'); ?>
                        <?php endif; ?>
                      </p>
                  </dd>
              </div>
              <div class="detail-works__item">
                  <dt class="detail-works__left">
                      <p class="txt">主要用途 :</p>
                  </dt>
                  <dd class="detail-works__right">
                      <p class="txt">
                      <?php $main_use = get_field('main_use');
                      if($main_use): ?>
                          <?php echo the_field('main_use'); ?>
                      <?php endif; ?>
                      </p>
                  </dd>
              </div>
              <div class="detail-works__item">
                  <dt class="detail-works__left">
                      <p class="txt">工事種別 : </p>
                  </dt>
                  <dd class="detail-works__right">
                      <p class="txt">
                      <?php $construction_type = get_field('construction_type');
                      if($construction_type): ?>
                          <?php echo the_field('construction_type'); ?>
                      <?php endif; ?>
                      </p>
                  </dd>
              </div>
              <div class="detail-works__item">
                  <dt class="detail-works__left">
                      <p class="txt">主要構造 : </p>
                  </dt>
                  <dd class="detail-works__right">
                      <p class="txt">
                      <?php $main_structure = get_field('main_structure');
                      if($main_structure): ?>
                          <?php echo the_field('main_structure'); ?>
                      <?php endif; ?>
                      </p>
                  </dd>
              </div>
              <div class="detail-works__item">
                  <dt class="detail-works__left">
                      <p class="txt">施工面積 : </p>
                  </dt>
                  <dd class="detail-works__right">
                      <p class="txt">
                      <?php $area = get_field('area');
                      if($area): ?>
                          <?php echo the_field('area'); ?>
                      <?php endif; ?>
                      </p>
                  </dd>
              </div>
            </dl>
        </div>
      </div>
</section>



<?php get_template_part('parts/post/contact'); ?>
<?php get_footer(); ?>
