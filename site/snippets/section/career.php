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
<section id="career" class="career">
    <div class="container">
        <div class="career__row">
            <div class="row">
                <div class="col-md-6">
                    <div class="career__title"><h2><?= page('home')->cartitle() ?></h2></div>
                    <div class="career__subtitle"><h3><?= page('home')->carsubtitle()?></h3></div>
                    <div class="career__text"><?= page('home')->cartext()->kirbytext() ?></div>
                    <div class="career__list">
                        <?= page('home')->carlist() ?>
                    </div>
                    <div class="career__text">
                        <?= page('home')->cartext2()->kirbytext() ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php if($image = page('home')->carimage()->toFile()): ?>
                        <?php echo $image->picture('webp-class'); ?>
                    <?php endif ?>
                    <div class="career__button"><a class="btn btn-primary" href="<?= $site->url() ?>/career" role="button">Karriere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>