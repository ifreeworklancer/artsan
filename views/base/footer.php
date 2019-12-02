</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="footer-nav">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4 d-flex justify-content-center justify-content-lg-start align-items-center mb-4 mb-lg-0">
                    <a href="/" class="logo">
                        <img src="../../images/icon/logo.png" alt="logo">
                    </a>
                    <ul class="social-list">
                        <li>
                            <a href="<?= $facebook; ?>">
                                <svg width="18" height="18">
                                    <use xlink:href="#facebook-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $instagram; ?>">
                                <svg width="18" height="18">
                                    <use xlink:href="#instagram-icon"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-8 d-flex flex-column flex-sm-row justify-content-center justify-content-lg-end align-items-center">
                    <ul class="contacts-list contacts-list--flex">
                        <li>
                            <a href="tel:<?= phone_link($phone1); ?>">
                                <svg width="16" height="26">
                                    <use xlink:href="#phone-icon"></use>
                                </svg>
                                <?= $phone1; ?>
                            </a>
                        </li>
                        <li>
                            <a href="tel:<?= phone_link($phone2); ?>">
                                <svg width="16" height="26">
                                    <use xlink:href="#phone-icon"></use>
                                </svg>
                                <?= $phone2; ?>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary open-order">
                        заказать такси
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-description">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-auto col-xl">
                    <div class="footer-description__text text-center text-lg-left">
                        <?= date('Y')?> Все права защищены
                    </div>
                </div>
                <div class="col-sm-7 col-lg-auto col-xl">
                    <div class="footer-description__text text-center">
                        © ArtSanTaxi - Междугородние перевозки
                    </div>
                </div>
                <div class="col-sm-7 col-lg-auto col-xl">
                    <div class="footer-description__text text-center text-lg-right">
                        Вебразработка сайта студией <a href="https://impressionbureau.pro/" target="_blank">Impression Bureau</a> 2019
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>