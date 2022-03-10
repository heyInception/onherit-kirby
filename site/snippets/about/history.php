<section class="history">
    <div class="history__row">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="history__title"><h2><?= page()->historytitle() ?></h2></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="history__items">
                        <div class="history__item history__item_right">
                            <div class="history__year"><?= page()->datetitle_1() ?></div>
                            <div class="history__text"><?= page()->datesubtitle_1()->kirbytext() ?></div>
                        </div>
                        <div class="history__item history__item_center">
                            <div class="history__year"><?= page()->datetitle_2() ?></div>
                            <div class="history__text"><?= page()->datesubtitle_2()->kirbytext() ?></div>
                        </div>
                        <div class="history__item history__item_left">
                            <div class="history__year"><?= page()->datetitle_3() ?></div>
                            <div class="history__text"><?= page()->datesubtitle_3()->kirbytext() ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="history__items">
                        <div class="history__item history__item_right">
                            <div class="history__year"><?= page()->datetitle_4() ?></div>
                            <div class="history__text"><?= page()->datesubtitle_4()->kirbytext() ?></div>
                        </div>
                        <div class="history__item history__item_center">
                            <div class="history__year"><?= page()->datetitle_5() ?></div>
                            <div class="history__text"><?= page()->datesubtitle_5()->kirbytext() ?></div>
                        </div>
                        <div class="history__item history__item_left">
                            <div class="history__year"><?= page()->datetitle_6() ?></div>
                            <div class="history__text"><?= page()->datesubtitle_6()->kirbytext() ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>