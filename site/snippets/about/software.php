<section class="software">
    <div class="software__row">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="software__title"><h2><?= page()->slidertitle() ?></h2></div>
                    <div class="software__subtitle"><h3><?= page()->slidersubtitle()?></h3></div>
                </div>
            </div>
            <div class="software__slider">
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="software__item">
                                <div class="software__img">
                                    <?php if ($image = page()->sliderimg()->toFile()) : ?>
                                        <?php echo $image->picture('webp-class'); ?>
                                    <?php endif ?>
                                </div>
                                <div class="software__headline"><?= page()->sliderhead() ?> </div>
                                <div class="software__text">
                                    <?= page()->slidertext()->kirbytext() ?>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="software__item">
                                <div class="software__img">
                                    <?php if ($image = page()->sliderimg_2()->toFile()) : ?>
                                        <?php echo $image->picture('webp-class'); ?>
                                    <?php endif ?>
                                </div>
                                <div class="software__headline"><?= page()->sliderhead_2() ?> </div>
                                <div class="software__text">
                                    <?= page()->slidertext_2()->kirbytext() ?>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="software__item">
                                <div class="software__img">
                                    <?php if ($image = page()->sliderimg_3()->toFile()) : ?>
                                        <?php echo $image->picture('webp-class'); ?>
                                    <?php endif ?>
                                </div>
                                <div class="software__headline"><?= page()->sliderhead_3() ?> </div>
                                <div class="software__text">
                                    <?= page()->slidertext_3()->kirbytext() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="software__info">
                        <span>
                            Sie haben weitere Vorschläge? Her damit! Wir sind für jede Art von Anregungen offen. Teilen Sie uns Ihre Ideen über unser <a href="#contacts">Kontaktformular</a> mit!
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>