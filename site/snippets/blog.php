<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  The note snippet renders an excerpt of a blog article.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<div class="col-md-6 blog__item">
    <div class="news__card">
        <div class="news__img">
            <a href="<?= $blog->url() ?>">
            <?php if($image = $blog->blogimage()->toFile()): ?>
                    <img src="<?= $image->url() ?>" class="img-fluid" alt="">
                <?php endif ?>
            </a>
        </div>
        <div class="news__padd">
            <div class="news__top"><span>Lesedauer</span> <span><time datetime="<?= $blog->published('c') ?>"><?= $blog->published() ?></time></span></div>
            <div class="news__headline"><?= $blog->title() ?></div>
            <?php if (($excerpt ?? true) !== false): ?>
            <div class="news__text">
                <?= $blog->textblog()->toBlocks()->excerpt(170) ?>
            </div>
            <?php endif ?>
            <div class="news__button news__button--left"><a class="btn btn-primary newsbtn" href="<?= $blog->url() ?>" role="button">Mehr erfahren</a></div>
        </div>
    </div>
</div>