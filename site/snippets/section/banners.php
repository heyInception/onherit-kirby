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
<section class="banners">
    <div class="container">
        <div class="banners__row">
            <div class="row">
                <div class="col-12">
                    <div class="banner__show">
                        <?php if ($image = page()->bannersimage()->toFile()) : ?>
                            <?php echo $image->picture('webp-class'); ?>
                        <?php endif ?>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center mb-40">
                <div class="col-sm-9 col-12">
                    <div class="banners__video">
                        <?php if ($image = page('home')->bannersimgvideo()->toFile()) : ?>
                            <video height="478" controls="controls" poster="<?= $image->url() ?>">
                                <?php if ($image = page('home')->bannersvideo()->toFile()) : ?>
                                    <source src="<?= $image->url() ?>" type='video/mp4;
                                codecs="avc1.42E01E, mp4a.40.2" ' />
                                <?php endif ?>
                            </video>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-sm-2">
                    <div class="banners__line"></div>
                </div>
                <div class="col-sm-7 col-12">
                    <div class="banners__text"><?= page('home')->bannerstext()->kirbytext() ?></div>
                </div>
            </div>
        </div>
    </div>
</section>