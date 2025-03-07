<?php get_header(); ?>
<section class="sub-contact">
    <div class="sub-contact__inner inner">
        <div class="sub-contact__title">
            <h1 class="page-title txt"><span>contact</span>お問い合わせ</h1>
        </div>
            <div class="sub-contact__body">
            <form class="sub-contact__form" id="form">
                <dl class="form-rows">
                    <div class="form-rows__item form-row">
                        <dt class="form-row__text txt">
                            <label for="your-name" class="form-row__required">会社名</label>
                        </dt>
                        <dd class="form-row__input txt">
                            <input type="text" id="your-name" placeholder="例：株式会社OOOO"><span class="form-row__hover"></span>
                        </dd>
                    </div>
                    <div class="form-rows__item form-row">
                        <dt class="form-row__text txt">
                            <label for="your-name" class="form-row__required">お名前</label>
                        </dt>
                        <dd class="form-row__input txt">
                            <input type="text" id="your-name" placeholder="例：和久須　太郎" required><span class="form-row__hover"></span>
                        </dd>
                    </div>
                    <div class="form-rows__item form-row">
                        <dt class="form-row__text txt">
                            <label for="your-tel" class="form-row__required">電話番号</label>
                        </dt>
                        <dd class="form-row__input txt">
                            <input type="tel" id="your-tel" placeholder="例：00-000-0000" required><span class="form-row__hover"></span>
                        </dd>
                    </div>
                    <div class="form-rows__item form-row">
                        <dt class="form-row__text txt">
                            <label for="your-mail" class="form-row__required">メールアドレス</label>
                        </dt>
                        <dd class="form-row__input txt">
                            <input type="email" id="your-mail" placeholder="例：example@.com" required><span class="form-row__hover"></span>
                        </dd>
                    </div>
                    <div class="form-rows__item form-row form-row--start">
                        <dt class="form-row__text txt">
                            <label for="your-contact" class="form-row__required">お問い合わせ内容</label>
                        </dt>
                        <dd class="form-row__input txt">
                            <textarea name="your-contact" id="your-contact" required></textarea>
                        </dd>
                    </div>
                </dl>
                <div class="sub-contact__check">
                    <label for="your-privacy">
                        <input type="checkbox" id="your-privacy" name="" value="プライバシーポリシーの同意" required>
                        <p class="sub-contact__link">
                            <a href="">プライバシーポリシー</a>に同意します。
                        </p>
                    </label>
                </div>
                <div class="sub-contact__submit">
                    <input class="btn btn--submit" type="submit" value="送信" id="js-submit" disabled>
                    <span></span>
                </div>
            </form>
        </div>
    </div>
</section>



<?php get_footer(); ?>