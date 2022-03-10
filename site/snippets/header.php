<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This header snippet is reused in all templates.
  It fetches information from the `site.txt` content file
  and contains the site navigation.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <?php
  /*
    In the title tag we show the title of our
    site and the title of the current page
  */
  ?>
  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?php
  /*
    Stylesheets can be included using the `css()` helper.
    Kirby also provides the `js()` helper to include script file.
    More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers
  */
  ?>
  <?= css([
    'assets/css/prism.css',
    'assets/css/lightgallery.css',
    'assets/css/index.css',
    'css/vendor.css',
    'css/main.css',
    'css/global.css',
    '@auto'
  ]) ?>
  <?php
  /*
    The `url()` helper is a great way to create reliable
    absolute URLs in Kirby that always start with the
    base URL of your site.
  */
  ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
</head>

<body class="pages-<?= $page->id() ?>" style="opacity:0;transition:.7s;">

  <header class="header">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light header__color">
      <div class="container align-items-center header__h">
        <a class="navbar-brand" href="<?= $site->url() ?>"><img src="<?= $site->url() ?>/img/logo.svg" alt="" width="291" height="27" /> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav ms-auto mb-lg-0 mt-0">
            <?php foreach ($site->pages()->listed() as $item) : ?>
              <li class="nav-item">
                <a<?php e($item->isOpen(), ' aria-current="page" class="active"') ?> href="<?= $item->url() ?>"><?= html($item->menuheading()) ?></a>
              </li>
            <?php endforeach ?>
          </ul>
          <button class="header__btn"><a href="#contacts">Kontakt</a></button>
        </div>
      </div>
    </nav>
    <?php if ($page->id() == 'news' or $page->template() == 'blog') : ?>
      <div id="home" class="header__main" style="background-image: url('<?= $site->url() ?>/img/Header.jpg');">
      <?php else : ?>
        <div id="home" class="header__main" <?php if ($cover = $page->cover()->toFile()) : ?> style="background-image: url(<?= $cover->url() ?>);" <?php endif ?>>
        <?php endif; ?>
        <div class="container">
          <div class="header__title">
            <h1><?= $page->title() ?></h1>
          </div>
          <?php if ($page->subheading()->isNotEmpty()) : ?>
            <div class="header__subtitle">
              <h2><?= $page->subheading()->html() ?></h2>
            </div>
          <?php endif ?>
          <?php foreach ($page->titlebtn()->toStructure() as $titlebtn) : ?>
            <div class="header__button"><a class="btn btn-primary" href="<?= $titlebtn->url() ?>" role="button"><?= $titlebtn->platform() ?> <i></i></a>
            </div>
          <?php endforeach ?>
        </div>
        </div>
  </header>
  <main class="main">
    <div class="icon_side_contact_wrapper">
      <a href="#contacts">
        <div class="icon_contact"></div>
      </a>
      <a href="mailto:<?= site()->mailto() ?>">
        <div class="icon_contact icon_contact-2"></div>
      </a>
      <a href="tel:<?= site()->telnumber() ?>">
        <div class="icon_contact icon_contact-3"></div>
      </a>
    </div>