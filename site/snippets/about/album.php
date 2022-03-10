<section class="album">
    <div class="container">
        <div class="album__row">
            <div class="row">
                <div class="col-lg-12">
                    <div class="album__title">
                        <h2><?= page()->albumtitle() ?></h2>
                    </div>
                    <div class="album__subtitle">
                        <h3><?= page()->albumsubtitle() ?></h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="custom-transition" class="album__block">
                        <div class="album__items album__items_two">
                            <?php if ($image = page()->albumimage_1()->toFile()) : ?>
                                <div class="album__item" data-src="<?= $image->url() ?>">
                                <?php echo $image->picture('webp-class'); ?>
                                </div>
                            <?php endif ?>
                            <?php if ($image = page()->albumimage_2()->toFile()) : ?>
                                <div class="album__item" data-src="<?= $image->url() ?>">
                                <?php echo $image->picture('webp-class'); ?>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="album__items album__items_one">
                            <?php if ($image = page()->albumimage_3()->toFile()) : ?>
                                <div class="album__item" data-src="<?= $image->url() ?>">
                                <?php echo $image->picture('webp-class'); ?>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="album__items album__items_three">
                            <?php if ($image = page()->albumimage_4()->toFile()) : ?>
                                <div class="album__item" data-src="<?= $image->url() ?>">
                                <?php echo $image->picture('webp-class'); ?>
                                </div>
                            <?php endif ?>
                            <?php if ($image = page()->albumimage_5()->toFile()) : ?>
                                <div class="album__item" data-src="<?= $image->url() ?>">
                                <?php echo $image->picture('webp-class'); ?>
                                </div>
                            <?php endif ?>
                            <?php if ($image = page()->albumimage_6()->toFile()) : ?>
                                <div class="album__item" data-src="<?= $image->url() ?>">
                                <?php echo $image->picture('webp-class'); ?>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="album__items album__items_two">
                            <?php if ($image = page()->albumimage_7()->toFile()) : ?>
                                <div class="album__item" data-src="<?= $image->url() ?>">
                                <?php echo $image->picture('webp-class'); ?>
                                </div>
                            <?php endif ?>
                            <?php if ($image = page()->albumimage_8()->toFile()) : ?>
                                <div class="album__item" data-src="<?= $image->url() ?>">
                                <?php echo $image->picture('webp-class'); ?>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>