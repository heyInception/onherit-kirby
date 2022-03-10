<section class="about-more">
    <div class="about-more__row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="about-more__text">
                        <p><strong><?= page()->amtitle() ?></strong></p>
                        <p><?= page()->amsubtitle() ?></p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="about-more__button">
                        <?php foreach ($page->ambtn()->toStructure() as $ambtn) : ?>
                            <a href="<?= $ambtn->url() ?>"><i class="about-more__icon"></i></a>
                        <?php endforeach ?>
                        <?php foreach ($page->ambtn2()->toStructure() as $ambtn2) : ?>
                            <a class="btn btn-primary" href="<?= $ambtn2->url() ?>" role="button"><?= $ambtn2->platform() ?> <i></i></a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>