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
?>
<section id="offer" class="offer">
    <div class="container">
        <div class="offer__row">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="offer__header">
                        <h2><?= $page->offertitle() ?></h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="offer__subheader">
                        <h3><?= $page->offersubtitle() ?></h3>
                    </div>
                </div>
            </div>
            <div class="row align-items-center offer__padding">
                <div class="col-lg-4 col-md-6 offer__col mb-20"><i class="offer__icon offer__icon--1"></i>
                    <span><?= $page->servicetext1() ?></span>
                </div>
                <div class="col-lg-4 col-md-6 offer__col mb-20"><i class="offer__icon offer__icon--2"></i>
                    <span><?= $page->servicetext2() ?></span>
                </div>
                <div class="col-lg-4 col-md-6 offer__col mb-20"><i class="offer__icon offer__icon--3"></i>
                    <span><?= $page->servicetext3() ?></span>
                </div>
                <div class="col-lg-4 col-md-6 offer__col mb-20"><i class="offer__icon offer__icon--4"></i>
                    <span><?= $page->servicetext4() ?></span>
                </div>
                <div class="col-lg-4 col-md-6 offer__col mb-20"><i class="offer__icon offer__icon--5"></i>
                    <span><?= $page->servicetext5() ?></span>
                </div>
                <div class="col-lg-4 col-md-6 offer__col mb-20"><i class="offer__icon offer__icon--6"></i>
                    <span><?= $page->servicetext6() ?></span>
                </div>
            </div>
            <div class="row align-items-center"></div>
        </div>
    </div>
</section>