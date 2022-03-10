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
<?php snippet('header') ?>
  <?php snippet('services/team') ?>
  <?php snippet('services/advantage') ?>
  <?php snippet('services/career') ?>
  <?php snippet('services/video') ?>
  <?php snippet('services/offer') ?>
  <?php snippet('services/process') ?>
  <?php snippet('section/contacts') ?>
<?php snippet('footer') ?>

