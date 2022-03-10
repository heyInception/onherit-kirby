<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This intro snippet is reused in multiple templates.
  While it does not contain much code, it helps to keep your
  code DRY and thus facilitate maintenance when you have
  to make changes.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<section id="team" class="team">
    <div class="team__row">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="team__title">
                        <h2><?= page('home')->teamtitle() ?></h2>
                    </div>
                    <div class="team__subtitle"><h3><?= page('home')->teamsubtitle()?></h3></div>
                    <div class="team__text"><?= page('home')->teamtext()->kirbytext() ?>
                    </div>
                    <div class="team__link">
                        <a href="/about-us"><i class="team__icon"></i> <span>Über uns</span></a>
                    </div>
                </div>
                <div class="col-md-6 offset-md-0 order-1 order-md-2">
                    <?php if ($image = page('home')->teamimage()->toFile()) : ?>
                        <?php echo $image->picture('webp-class'); ?>
                    <?php endif ?>
                    
                </div>
            </div>
            <div class="team__block">
                <div class="row">
                    <div class="col-12">
                        <div class="team__title">Eine individuelle Software kann Sie in vielen Situationen unterstützen</div>
                        <div class="team__r">
                            <div class="team__item">
                                <i class="team-icon">1</i>
                                <p>Automatisierung<br> manueller Arbeitsschritte</p>
                            </div>
                            <div class="team__item">
                                <i class="team-icon">2</i>
                                <p>Reduzierung von Arbeits-<br>aufwand und Fehlern aufgrund<br> doppelter Datenpflege</p>
                            </div>
                            <div class="team__item">
                                <i class="team-icon">3</i>
                                <p>Effiziente Integration<br> bestehender Systeme</p>
                            </div>
                        </div>
                        <div class="team__subtitle">Wir klären Sie gerne vorab über die verschiedenen Umsetzungs-<br>möglichkeiten auf und finden so gemeinsam die richtigen Leistungen für Ihr Anliegen. </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 offset-md-0 team__img">
                    <?php if ($image = page('home')->teamimage2()->toFile()) : ?>
                        <?php echo $image->picture('webp-class'); ?>
                    <?php endif ?>
                </div>
                <div class="col-md-6">
                    <div class="team__title">
                        <h2><?= page('home')->teamtitle2() ?></h2>
                    </div>
                    <div class="team__subtitle"><h3><?= page('home')->teamsubtitle2() ?></h3></div>
                    <div class="team__text"><?= page('home')->teamtext2()->kirbytext() ?></div>
                    <div class="team__list">
                        <?= page('home')->teamlist() ?>
                    </div>
                </div>
            </div>
            <div class="team__desc">
                <p>
                    <?= page('home')->teammaintext()->kirbytext() ?>
                </p>
            </div>
            <div class="team__button">
                <?php foreach ($page->teambtn()->toStructure() as $teambtn) : ?>
                    <a class="btn btn-primary" href="<?= $site->url() ?>/services" role="button"><?= $teambtn->platform() ?></a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>