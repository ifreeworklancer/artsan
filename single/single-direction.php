<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Direction -->
    <section id="direction-intro" style="background-image: url('<?= $single_direction['intro']['image_bg']; ?>');">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-5 mb-4 mb-md-0">
                    <div class="direction-intro-item">
                        <div class="section-description section-description--center section-description--top">
                            <h2 class="section-description__title text-dark">
                                <?= $single_direction['intro']['title']; ?>
                            </h2>
                        </div>
                        <div class="direction-intro-item-description">
                            <?= $single_direction['intro']['description']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-5 px-0 px-md-3">
                    <div class="direction-intro-form">
                        <h3 class="direction-intro-form__title text-primary">
                            Заказать такси
                        </h3>
                        <form>
                            <div class="form-column">
                                <div class="form-group">
                                    <label for="user-name">
                                        ваше имя
                                    </label>
                                    <input type="text" name="name" id="user-name" class="form-control"
                                           placeholder="Введите имя">
                                </div>
                                <div class="form-group">
                                    <label for="user-phone">
                                        введите номер телефона
                                    </label>
                                    <input type="tel" name="phone" id="user-phone" class="form-control"
                                           placeholder="+38 (099) 123-45-67">
                                </div>
                                <button class="btn btn-primary d-flex w-100">
                                    заказать такси
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="decor-image d-none d-md-block"></div>
    </section>

    <section id="direction-services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="direction-services__title text-dark text-center">
                        <?= $single_direction['services']['title']; ?>
                    </h3>
                </div>
                <?php
                foreach ($single_direction['services']['items'] as $item) :
                    ?>
                    <div class="col-sm-6 col-lg-3">
                        <div class="direction-services-item">
                            <figure class="direction-services-item__image"
                                    style="background-image: url(<?= $item['image']; ?>);"></figure>
                            <div class="direction-services-item__description">
                                <?= $item['description']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="decor-image d-none d-sm-block"></div>
    </section>

<?php
require_once('../views/sections/order.php');
require_once('../views/sections/directions.php');
require_once('../views/sections/about.php');
require_once('../views/sections/vacancies.php');
require_once('../views/base/footer.php');