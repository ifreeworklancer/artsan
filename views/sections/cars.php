<!-- Cars -->
<section id="cars">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-12">
                <div class="section-description section-description--center section-description--both">
                    <h2 class="section-description__title text-dark">
                        <?= $cars['title']; ?>
                    </h2>
                    <div class="section-description__text">
                        <?= $cars['description']; ?>
                    </div>
                </div>
            </div>
            <?php foreach ($cars['items'] as $item) : ?>
                <div class="col-sm-8 col-lg-6 p-3 p-lg-4">
                    <a href="../../single/single-car.php" class="cars-item">
                        <div class="cars-item-prev">
                            <figure class="cars-item__image"
                                    style="background-image: url(<?= $item['image']; ?>);"></figure>
                        </div>
                        <div class="cars-item-body">
                            <h6 class="cars-item__title">
                                <?= $item['title']; ?>
                            </h6>
                            <div class="cars-item__description">
                                <?= $item['description']; ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
            <div class="col-12 text-center">
                <a href="#" class="btn btn-outline-primary">
                    Показать еще
                </a>
            </div>
        </div>
    </div>
</section>