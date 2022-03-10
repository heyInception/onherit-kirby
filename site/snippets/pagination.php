<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  The pagination snippet renders prev/next links in the
  blog, when articles spread across multiple pages

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<?php if ($pagination->hasPages()): ?>
  <?=$pagination->nextPage()?>
<?php endif ?>
