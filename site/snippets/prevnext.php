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
    'limit'    => 2,
    'total'    => 100,
    'method'   => 'query',
    'variable' => 'p'
  ]);
?>
<section id="news" class="news blog-load">
    <div class="container">
        <div class="news__row">
            <div class="row align-items-end mb-40">
                <div class="col-md-12">
                    <div class="news__title"><h2>Das könnte Sie ebenfalls interessieren</h2></div>
                </div>
            </div>
            <div class="row blog__row">
                <?php foreach ($articles as $blog): ?>
                <?php snippet('blog', ['blog' => $blog]) ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div class="container">
    <button id="more"><a href="/news">Mehr News</a></button>
</div>
</section>