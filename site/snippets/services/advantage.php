<section class="advantage">
    <div class="container">
        <div class="advantage__row">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="advantage__img">
                        <?php if ($image = page()->advantageimage()->toFile()) : ?>
                            <?php echo $image->picture('webp-class'); ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="advantage__title">
                        <h2><?= page()->advantagetitle() ?></h2>
                    </div>
                    <div class="advantage__subtitle">
                        <?= page()->advantagesubtitle()->kirbytext() ?>
                    </div>
                    <div class="advantage__blocks">
                        <div class="advantage__item">
                            <div class="advantage__headline"><i class="adv-i-10"></i><?= page()->advantageheadline_4()->kirbytext() ?></div>
                            <div class="advantage__text"><?= page()->advantagetext_4()->kirbytext() ?></div>
                        </div>
                        <div class="advantage__item">
                            <div class="advantage__headline"><i class="adv-i-9"></i><?= page()->advantageheadline_3()->kirbytext() ?></div>
                            <div class="advantage__text"><?= page()->advantagetext_3()->kirbytext() ?></div>
                        </div>
                        <div class="advantage__item">
                            <div class="advantage__headline"><i class="adv-i-8"></i><?= page()->advantageheadline_2()->kirbytext() ?></div>
                            <div class="advantage__text"><?= page()->advantagetext_2()->kirbytext() ?></div>
                        </div>
                        <div class="advantage__item">
                            <div class="advantage__headline"><i class="adv-i-7"></i><?= page()->advantageheadline()->kirbytext() ?></div>
                            <div class="advantage__text"><?= page()->advantagetext()->kirbytext() ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>