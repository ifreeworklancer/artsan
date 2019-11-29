<!-- Advantages -->
<section id="advantages" style="background-image: url(<?= $advantages['bg_image']; ?>);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-description section-description--center section-description--both">
                    <h2 class="section-description__title text-dark">
                        <?= $advantages['title']; ?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-8 pr-lg-0 order-2 order-lg-1">
                <div class="advantages-row">
                    <?php
                    $count = 0;
                    foreach ($advantages['items'] as $item) :
                        $count++;
                        ?>
                        <div class="advantages-col">
                            <div class="advantages-item">
                                <div class="advantages-item__title">
                                    <?= $item['title']; ?>
                                </div>
                                <div class="advantages-item__icon">
                                    <svg width="100" height="100">
                                        <use xlink:href="#advantages-<?= $count; ?>"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4 pl-lg-0 order-1 order-lg-2">
                <div class="advantages-description">
                    <div>
                        <div class="advantages-description__logo">
                            <img src="../../images/icon/logo-white.png" alt="logo">
                        </div>
                        <div class="advantages-description__text">
                            <?= $advantages['description']; ?>
                        </div>
                    </div>
                    <div>
                        <figure class="advantages-description__prev"
                                style="background-image: url('../../images/content/advantages/advantages-item.png');"></figure>
                        <a href="#" class="btn btn-primary d-flex">
                            заказать такси
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>