<section id="team" class="team">
    <div class="team__row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="team__title">
                        <?= page()->teamtitle2() ?>
                    </div>
                    <div class="team__subtitle"><?= page()->teamsubtitle2()->kirbytext() ?></div>
                    <div class="team__list">
                        <?= page()->teamlist() ?>
                    </div>
                </div>
                <div class="col-md-5 offset-md-0 team__img">
                    <?php if ($image = page()->teamimage2()->toFile()) : ?>
                        <?php echo $image->picture('webp-class'); ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>