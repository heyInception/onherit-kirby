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
$articles = $pages->children()->paginate([
    'page'     => 1,
    'limit'    => 4,
    'total'    => 4,
    'method'   => 'query',
    'variable' => 'p'
  ]);
?>
<section id="news" class="news">
    <div class="container">
        <div class="news__row">
            <div class="row align-items-end mb-40">
                <div class="col-md-8">
                    <div class="news__title"><h2><?= page('home')->newstitle() ?></h2></div>
                    <div class="news__subtitle"><h3><?= page('home')->newssubtitle() ?></h3></div>
                </div>
                <div class="col-md-4 ms-auto">
                    <div class="news__button">
                        <?php foreach ($page->newsbtn()->toStructure() as $social): ?>
                        <a class="btn btn-primary" href="<?= $site->url() ?>/news"
                            role="button"><?= $social->platform() ?></a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($articles as $blog): ?>
                <?php snippet('blog', ['blog' => $blog]) ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>