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
<?php snippet('about/about-two') ?>
<?php snippet('about/about') ?>
<?php snippet('about/history') ?>
<?php snippet('about/software') ?>
<?php snippet('about/album') ?>
<?php snippet('section/contacts') ?>
<?php snippet('footer') ?>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            slidesPerView: 2,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                992: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                1200: {
                    slidesPerView: 2,
                    spaceBetween: 40
                }
            }
        });
    </script>
