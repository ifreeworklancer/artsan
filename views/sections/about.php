<!-- about -->
<section id="about">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between">
            <div class="col-sm-8 col-lg-6 col-xl-5 order-2 order-lg-1">
                <div class="about-item">
                    <h3 class="about-item__title text-dark">
                        <?= $about['title']; ?>
                    </h3>
                    <div class="about-item-description">
                        <div class="about-item-description__text">
                            <?= $about['description']; ?>
                        </div>
                        <div class="open-full-text open-full-text--about">
                            Читать дальше
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-lg-6 order-1 order-lg-2">
                <div class="about-prev">
                    <?php foreach ($about['images'] as $image) : ?>
                        <figure class="about-prev__image" style="background-image: url('<?= $image; ?>');"></figure>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>