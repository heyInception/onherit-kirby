<section class="advantage">
    <div class="container">
        <div class="advantage__row">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="advantage__img">
                    <?php if($image = page()->advantageimage()->toFile()): ?>
                        <?php echo $image->picture('webp-class'); ?>
                    <?php endif ?>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="advantage__title">
                        <h2><?= page()->advantagetitle() ?></h2>
                    </div>
                    <div class="advantage__subtitle">
                        <h3><?= page()->advantagesubtitle() ?></h3>
                    </div>
                    <div class="advantage__blocks">
                        <div class="advantage__item">
                            <div class="advantage__headline"><i class="adv-i-1"></i><?= page()->advantageheadline()->kirbytext() ?></div>
                            <div class="advantage__text"><?= page()->advantagetext()->kirbytext() ?></div>
                        </div>
                        <div class="advantage__item">
                            <div class="advantage__headline"><i class="adv-i-2"></i><?= page()->advantageheadline_2()->kirbytext() ?></div>
                            <div class="advantage__text"><?= page()->advantagetext_2()->kirbytext() ?></div>
                        </div>
                        <div class="advantage__item">
                            <div class="advantage__headline"><i class="adv-i-3"></i><?= page()->advantageheadline_3()->kirbytext() ?></div>
                            <div class="advantage__text"><?= page()->advantagetext_3()->kirbytext() ?></div>
                        </div>
                        <div class="advantage__item">
                            <div class="advantage__headline"><i class="adv-i-4"></i><?= page()->advantageheadline_4()->kirbytext() ?></div>
                            <div class="advantage__text"><?= page()->advantagetext_4()->kirbytext() ?></div>
                        </div>
                        <div class="advantage__item">
                            <div class="advantage__headline"><i class="adv-i-5"></i><?= page()->advantageheadline_5()->kirbytext() ?></div>
                            <div class="advantage__text"><?= page()->advantagetext_5()->kirbytext() ?></div>
                        </div>
                        <div class="advantage__item">
                            <div class="advantage__headline"><i class="adv-i-6"></i><?= page()->advantageheadline_6()->kirbytext() ?></div>
                            <div class="advantage__text"><?= page()->advantagetext_6()->kirbytext() ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>