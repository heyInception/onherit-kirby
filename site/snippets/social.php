<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  In this snippet the svg() helper is a great way to embed SVG
  code directly in your HTML. Pass the path to your SVG
  file to load it.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<span class="social">
    <?php foreach ($page->footerbtn1()->toStructure() as $footerbtn1) : ?>
        <a href="<?= $footerbtn1->url() ?>" target="_blank">
            <i class="social__icon social__icon--1"></i>
        </a>
    <?php endforeach ?>
    <?php foreach ($page->footerbtn2()->toStructure() as $footerbtn2) : ?>
        <a href="<?= $footerbtn2->url() ?>" target="_blank">
            <i class="social__icon social__icon--2"></i>
        </a>
    <?php endforeach ?>
    <?php foreach ($page->footerbtn3()->toStructure() as $footerbtn3) : ?>
        <a href="<?= $footerbtn3->url() ?>" target="_blank" onclick="return false;">
        <div class="footer__social--flex">
            <i class="social__icon social__icon--3"></i>
            <span>soon</span>
        </div>
    </a>
    <?php endforeach ?>
</span>