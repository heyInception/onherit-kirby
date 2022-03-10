<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This footer snippet is reused in all templates.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
</main>
<footer class="footer">
    <div class="footer__row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container align-items-center footer__h">
                <a class="navbar-brand" href="<?= $site->url() ?>">
                    <?php if ($image = page('home')->footerlogo()->toFile()) : ?>
                        <img src="<?= $image->url() ?>" alt="" width="291" height="27">
                    <?php endif ?>
                </a>
                <div class="navbar-collapse--footer">
                    <ul class="navbar-nav ms-auto mb-lg-0 mt-0">
                        <?php foreach ($site->pages()->listed() as $item) : ?>
                            <li class="nav-item--footer">
                                <a<?php e($item->isOpen(), ' aria-current="page" class=" active--footer"') ?> href="<?= $item->url() ?>"><?= html($item->menuheading()) ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                    <a href="#contacts"><button class="footer__btn">Kontakt</button></a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-2">
                    <div class="footer__social">
                        <?php snippet('social') ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-4">
                    <div class="footer__copyright"><?= $page->copyright('home') ?></div>
                </div>
                <div class="col-4">
                    <div class="footer__policy"><a href="/datenschutz">Datenschutz</a> <a href="/impressum">Impressum</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?= js([
    'assets/js/jquery-3.6.0.min.js',
    'assets/js/prism.js',
    'assets/js/lightgallery.min.js',
    'assets/js/index.js',
    'assets/js/popper.min.js',
    'assets/js/bootstrap.min.js',
    '@auto'
]) ?>
<script>
    $(document).ready(function() {
        $("body").css("opacity", "1");
    });
</script>
</body>

</html>