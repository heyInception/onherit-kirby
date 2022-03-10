<section class="job">
    <div class="job__row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="job__title">
                        <h2><?= page()->jobitle() ?></h2>
                    </div>
                    <div class="job__subtitle">
                        <h3><?= page()->jobsubtitle() ?></h3>
                    </div>
                    <div class="job__text"><?= page()->jobtext() ?></div>
                </div>
                <div class="col-md-6 offset-md-0 order-1 order-md-2">
                    <?php if ($image = page()->jobimage()->toFile()) : ?>
                        <?php echo $image->picture('webp-class'); ?>
                    <?php endif ?>
                </div>
            </div>
            <div class="row">
                <div class="job__loads">
                    <div class="job__load">
                        <?php foreach ($page->jobbtn()->toStructure() as $jobbtn) : ?>
                            <a href="<?= $jobbtn->url() ?>" target="_blank"><i class="icon-load"></i><?= $jobbtn->platform() ?></a>
                            <div class="job__desc">
                                <?= page()->jobdesc() ?>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="job__info">
                    <i class="icon-info"></i>
                    <p><?= page()->jobinfo() ?></p>
                </div>
            </div>
        </div>
    </div>
</section>