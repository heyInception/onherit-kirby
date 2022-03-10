<?php
/*
  Templates render the content of your pages.

  They contain the markup together with some control structures
  like loops or if-statements. The `$page` variable always
  refers to the currently active page.

  To fetch the content from each field we call the field name as a
  method on the `$page` object, e.g. `$page->title()`.

  This note template renders a blog article. It uses the `$page->cover()`
  method from the `note.php` page model (/site/models/page.php)

  It also receives the `$tag` variable from its controller
  (/site/controllers/note.php) if a tag filter is activated.

  Snippets like the header and footer contain markup used in
  multiple templates. They also help to keep templates clean.

  More about templates: https://getkirby.com/docs/guide/templates/basics
*/
?>
<?php snippet('header') ?>
        <?php if ($image = page()->blogimage()->toFile()) : ?>
            <section class="news-main">
                <div class="news-main__row">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-12 col-12">
                                <div class="news-main__date"><span><time datetime="<?= $page->published('c') ?>"><?= $page->published() ?></time></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif ?>
        <article class="blog">
            <div class="container">
                <div class="blog__content text__center">
                    <?php snippet('layouts', ['field' => $page->layout()])  ?>
                </div>
            </div>
        </article>
        <div class="author">
            <div class="container">
                <?php if ($user = $page->author()->toUser()) : ?>
                    <span><?= $user->username() ?></span>
                <?php endif ?>
            </div>
        </div>
        <?php snippet('prevnext') ?>
        <?php snippet('section/contacts') ?>
        <?php snippet('footer') ?>