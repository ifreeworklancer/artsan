<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Direction -->
    <section id="car-intro">
        <div class="container-fluid">
            <div class="row justify-content-center offset-lg-1">
                <div class="col-md-5 col-lg-3">
                    <div class="car-intro-item">
                        <div class="car-intro-item__class">
                            <?= $single_car['intro']['class']; ?>
                        </div>
                        <h2 class="car-intro-item__title">
                            <?= $single_car['intro']['title']; ?>
                        </h2>
                        <div class="car-intro-item-description">
                            <?= $single_car['intro']['description']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9 pl-0 pl-md-3 pr-0">
                    <div class="car-intro-slider">
                        <?php foreach ($single_car['intro']['images'] as $image) : ?>
                            <figure class="car-intro-slider-item"
                                    style="background-image: url('<?= $image; ?>');"></figure>
                        <?php endforeach; ?>
                    </div>
                    <div class="slider-arrow slider-arrow--car">
                        <div class="slider-arrow-item slider-arrow-item--prev">
                            <svg width="11" height="20">
                                <use xlink:href="#arrow-prev"></use>
                            </svg>
                        </div>
                        <div class="slider-arrow-item slider-arrow-item--next">
                            <svg width="11" height="20">
                                <use xlink:href="#arrow-next"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="car-advantages">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 px-0">
                    <div class="car-advantages-slider">
                        <?php foreach ($single_car['advantages'] as $advantage) : ?>
                            <div class="car-advantages-slider-item">
                                <div class="car-advantages-slider-item__icon"></div>
                                <?= $advantage; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="slider-arrow slider-arrow--advantages">
                        <div class="slider-arrow-item slider-arrow-item--prev">
                            <svg width="11" height="20">
                                <use xlink:href="#arrow-prev"></use>
                            </svg>
                        </div>
                        <div class="slider-arrow-item slider-arrow-item--next">
                            <svg width="11" height="20">
                                <use xlink:href="#arrow-next"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/sections/cars.php');
require_once('../views/sections/directions.php');
require_once('../views/sections/order.php');
require_once('../views/sections/about.php');
require_once('../views/sections/vacancies.php');
require_once('../views/base/footer.php');