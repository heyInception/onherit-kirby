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
                        <?php if($image = page()->contactimage()->toFile()): ?>
                            <?php echo $image->picture('webp-class'); ?>
                        <?php endif ?>
                        <div class="contacts__caption">
                            <caption>
                                <i class="contacts__icon"></i>
                                <span><?= page()->caption() ?></span>
                            </caption>
                        </div>
                    </div>
                    <div class="contacts__info">
                        <div class="contacts__name"><?= page()->name() ?></div>
                        <div class="contacts__subname"><?= page()->text()->kirbytext() ?></div>
                        <div class="contacts__data">
                            <a href="tel:+49 7031 – 20 29 29 0"><i class="icon__tel"></i>
                                <?= html::span( page()->phone()) ?> </a>
                            <a href="tel:+49 7031 – 20 29 29 99"><i class="icon__fax"></i>
                                <?= html::span( page()->phone2()) ?> </a>
                            <a href="mailto:info@ohrner-it.com"><i class="icon__mail"></i>
                                <?= html::span( page()->email()) ?></a>
                            <div class="loc"><i class="icon__loc"></i> <span><?= page()->address()->kt() ?></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-70">
                    <div class="contacts__title"><h2><?= page()->maintitle() ?></h2></div>
                    <div class="contacts__subtitle"><h3>Du hast Lust, deine Karriere bei Ohrner IT in Böblingen zu starten und von den einzigartigen Entfaltungsmöglichkeiten für Softwareentwickler zu profitieren?</h3></div>
                    <div class="contacts__text">Wir freuen uns auf deine Bewerbung! Fülle unser Kontaktformular aus und wir melden uns in Kürze bei dir zurück.</div>
                    <div class="contacts__form">
                        <?php snippet('application-form', compact('data')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
