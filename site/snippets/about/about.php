<section id="about" class="about">
    <div class="about__row">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="about__title"><h2><?= page()->abouttitle() ?></h2></div>
                    <div class="about__subtitle">
                    <h3><?= page()->aboutsubtitle()?></h3>
                    </div>
                    <div class="about__text">
                        <?= page()->abouttext()->kirbytext() ?>
                    </div>
                </div>
                <div class="col-md-6 offset-md-0 order-1 order-md-2">
                    <?php if($image = page()->aboutimage()->toFile()): ?>
                        <?php echo $image->picture('webp-class'); ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>