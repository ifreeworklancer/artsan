<!-- Directions -->
<section id="directions">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-description section-description--center section-description--top">
                    <h2 class="section-description__title text-dark">
                        <?= $directions['title']; ?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="custom-tabs custom-tabs-directions">
                    <ul class="custom-tabs-nav">
                        <?php foreach ($directions['directions'] as $direction) : ?>
                            <li>
                                <?= $direction['title']; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="custom-tabs-body">
                        <?php foreach ($directions['directions'] as $direction) : ?>
                            <div class="custom-tabs-body-item">
                                <?php foreach ($direction['item'] as $item) : ?>
                                    <div class="custom-accordion">
                                        <div class="custom-accordion-nav">
                                            <?= $item['title']; ?>
                                            <svg width="18" height="10">
                                                <use xlink:href="#toggle-arrow"></use>
                                            </svg>
                                        </div>
                                        <div class="custom-accordion-body">
                                            <ul class="directions-list">
                                                <?php foreach ($item['direction'] as $value) : ?>
                                                    <li class="directions-list-item">
                                                        <span class="directions-list-item__property">
                                                            <a href="../../single/single-direction.php">
                                                                <?= $value['property'] ?>
                                                            </a>
                                                        </span>
                                                        <div class="directions-list-item__separator"></div>
                                                        <span class="directions-list-item__value">
                                                            <?= $value['value'] ?>
                                                        </span>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>