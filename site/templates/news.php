<?php
/*
  Templates render the content of your pages.

  They contain the markup together with some control structures
  like loops or if-statements. The `$page` variable always
  refers to the currently active page.

  To fetch the content from each field we call the field name as a
  method on the `$page` object, e.g. `$page->title()`.

  This template lists all the subpages of the `notes` page with
  their title date sorted by date and links to each subpage.

  This template receives additional variables like $tag and $notes
  from the `notes.php` controller in `/site/controllers/notes.php`

  Snippets like the header and footer contain markup used in
  multiple templates. They also help to keep templates clean.

  More about templates: https://getkirby.com/docs/guide/templates/basics
*/
?>
<?php snippet('header') ?>
<?php if (empty($tag) === false) : ?>
    <div class="container">
        <h1>
            <small>Tag:</small> <?= html($tag) ?>
            <a href="<?= $page->url() ?>">&times;</a>
        </h1>
    </div>
<?php else : ?>
<?php endif ?>
<div class="container">
    <div class="row banners__row lm-blog" data-page="<?php snippet('pagination', ['pagination' => $news->pagination()]) ?>">
        <?php foreach ($news as $blog) : ?>
            <?php snippet('blog', ['blog' => $blog]) ?>
        <?php endforeach ?>
    </div>
</div>
<div class="container">
    <button class="load-more" accesskey="m"> <i class="icon-plus"></i> Mehr laden</button>
</div>
<section id="team" class="team">
    <div class="team__row">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="team__title">
                        <h2><?= page('home')->teamtitle() ?></h2>
                    </div>
                    <div class="team__subtitle">
                        <h3><?= page('home')->teamsubtitle() ?></h3>
                    </div>
                    <div class="team__text"><?= page('home')->teamtext()->kirbytext() ?></div>
                    <div class="team__link">
                        <a href="/about-us"><i class="team__icon"></i> <span>Über uns</span></a>
                    </div>
                </div>
                <div class="col-md-6 offset-md-0 order-1 order-md-2">
                    <?php if ($image = page('home')->teamimage()->toFile()) : ?>
                        <?php echo $image->picture('webp-class'); ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php snippet('section/contacts') ?>
<?php snippet('footer') ?>
<script>
    const element = document.querySelector('.banners__row');
    const button = document.querySelector('.load-more');
    let page = parseInt(element.getAttribute('data-page'));

    const fetchProjects = async () => {
        let url = `${window.location.href}.json/page:${page}`;
        try {
            const response = await fetch(url);
            const {
                html,
                more
            } = await response.json();
            button.hidden = !more;
            element.innerHTML += html;
            page++;
        } catch (error) {
            console.log('Fetch error: ', error);
        }
    }

    button.addEventListener('click', fetchProjects);


    /* const navLinks = document.querySelectorAll(".nav-item");
     const menuToggle = document.getElementById("navbarSupportedContent");
     const bsCollapse = new bootstrap.Collapse(menuToggle);
     navLinks.forEach((l) => {
         l.addEventListener("click", () => {
             bsCollapse.toggle();
         });
     });*/
</script>