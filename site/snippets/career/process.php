<section class="process">
    <div class="process__row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="process__title">
                        <h2><?= $page->processtitle() ?></h2>
                    </div>
                    <div class="process__subtitle">
                        <h3><?= $page->processsubtitle() ?></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-3">
                    <div class="process__item">
                        <div class="process__icon">
                            <i class="icon-one"></i>
                        </div>
                        <div class="process__text">
                            <?= $page->processtext1() ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="process__item">
                        <div class="process__icon">
                            <i class="icon-two"></i>
                        </div>
                        <div class="process__text">
                            <?= $page->processtext1() ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="process__item">
                        <div class="process__icon process__icon_hide">
                            <i class="icon-three"></i>
                        </div>
                        <div class="process__text">
                            <?= $page->processtext1() ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="process__info">
                        <?= $page->processinfo() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>