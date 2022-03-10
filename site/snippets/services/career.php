<section class="career">
    <div class="container">
        <div class="career__row">
            <div class="row justify-content-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="career__title">
                        <h2><?= page()->techtitle() ?></h2>
                    </div>
                    <div class="career__subtitle" style="max-width: max-content;">
                        <h3><?= page()->techsubtitle() ?></h3>
                    </div>
                    <div class="career__list">
                        <div class="career__two">
                            <?= page()->techlist1() ?>
                        </div>
                        <div class="career__one">
                            <?= page()->techlist2() ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <?php if ($image = page()->techimage()->toFile()) : ?>
                        <?php echo $image->picture('webp-class'); ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>