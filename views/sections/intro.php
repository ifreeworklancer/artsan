<!-- Intro -->
<section id="intro">
    <div class="container-fluid">
        <div class="row offset-xxl-1 justify-content-center justify-content-xl-start">
            <div class="col-sm-10 col-md-10 col-lg-9 col-xl-6 col-xxl-5">
                <div class="intro-item">
                    <div class="section-description">
                        <h1 class="section-description__title">
                            <?= $intro['title']; ?>
                        </h1>
                        <div class="section-description__text section-description__text--decor">
                            <?= $intro['description']; ?>
                        </div>
                    </div>
                    <div class="form-settlement">
                        <form id="form-settlement">
                            <div class="form-column">
                                <div class="form-group form-group-settlement">
                                    <label for="from">
                                        Откуда
                                    </label>
                                    <input type="text" id="from" class="form-control">
                                </div>
                                <div class="form-group form-group-settlement">
                                    <label for="where">
                                        Куда
                                    </label>
                                    <input type="text" id="where" class="form-control">
                                </div>
                                <div class="form-group form-group-check">
                                    <div class="form-radio">
                                        <div class="form-radio__title">
                                            Выберите класс авто
                                        </div>
                                        <div class="form-radio-group">
                                            <label>
                                                <input type="radio" name="cars-class">
                                                <figure class="form-radio-group__image"
                                                        style="background-image: url('../../images/content/intro/intro-1.png');"></figure>
                                                <div class="form-radio-group__title">
                                                    Класс А
                                                </div>
                                                <div class="form-radio-group__description">
                                                    1-4 пассажира
                                                </div>
                                            </label>
                                            <label>
                                                <input type="radio" name="cars-class">
                                                <figure class="form-radio-group__image"
                                                        style="background-image: url('../../images/content/intro/intro-1.png');"></figure>
                                                <div class="form-radio-group__title">
                                                    Класс А
                                                </div>
                                                <div class="form-radio-group__description">
                                                    1-4 пассажира
                                                </div>
                                            </label>
                                            <label>
                                                <input type="radio" name="cars-class">
                                                <figure class="form-radio-group__image"
                                                        style="background-image: url('../../images/content/intro/intro-1.png');"></figure>
                                                <div class="form-radio-group__title">
                                                    Класс А
                                                </div>
                                                <div class="form-radio-group__description">
                                                    1-4 пассажира
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-result">
                                        <h6 class="form-result__title">
                                            Результаты
                                        </h6>
                                        <ul class="form-result-list">
                                            <li>
                                                <div>Растояние:</div>
                                                <div>650 км</div>
                                            </li>
                                            <li class="form-result-list-item">
                                                <div>Ориентировочная цена:</div>
                                                <div>4850 грн</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="button-group">
                                        <button type="reset" id="reset-form-settlement" class="btn btn-dark">
                                            сбросить
                                        </button>
                                        <button class="btn btn-primary btn-submit">
                                            Посчитать стоимость
                                        </button>
                                        <a href="#" class="btn btn-primary open-order">
                                            заказать такси
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-map" style="background-image: url('../../images/content/intro/intro-map.jpg');"></div>
</section>
