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

<section id="contacts" class="contacts">
    <div class="container">
        <div class="contacts__row">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contacts__img">
                        <?php if ($image = page('home')->contactimage()->toFile()) : ?>
                            <?php echo $image->picture('webp-class'); ?>
                        <?php endif ?>
                        <div class="contacts__caption">
                            <caption>
                                <i class="contacts__icon"></i>
                                <span><?= page('home')->caption() ?></span>
                            </caption>
                        </div>
                    </div>
                    <div class="contacts__info">
                        <div class="contacts__name"><?= page('home')->name() ?></div>
                        <div class="contacts__subname"><?= page('home')->text()->kirbytext() ?></div>
                        <div class="contacts__data">
                            <a href="tel:<?= site()->telnumber()?>"><i class="icon__tel"></i>
                                <?= html::span(site()->telnumber()) ?> </a>
                            <a href="tel:<?= site()->telnumber2()?>"><i class="icon__fax"></i>
                                <?= html::span(site()->telnumber2()) ?> </a>
                            <a href="mailto:<?= site()->mailto()?>"><i class="icon__mail"></i>
                                <?= html::span(site()->mailto()) ?></a>
                            <div class="loc"><i class="icon__loc"></i> <span><?= page('home')->address()->kt() ?></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-70">
                    <div class="contacts__title">
                        <h2><?= page('home')->maintitle() ?></h2>
                    </div>
                    <div class="contacts__subtitle">
                        <h3><?= page('home')->subtitle() ?></h3>
                    </div>
                    <div class="contacts__text"><?= page('home')->subtitle2()->kirbytext() ?></div>
                    <div class="contacts__form">
                        <?php snippet('application-form', compact('data')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>