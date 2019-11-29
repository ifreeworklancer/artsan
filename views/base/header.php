<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="../../fonts/font.css">
    <link rel="stylesheet" href="../../dist/app.css">
</head>

<body>

<?php include(__DIR__ . '/../../partials/svgs.php'); ?>

<!-- App-header -->
<header id="app-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-lg-4 d-flex align-items-center">
                <a href="/" class="logo">
                    <img src="../../images/icon/logo.png" alt="logo">
                </a>
                <ul class="languages-list">
                    <li>
                            <span>
                                ru
                            </span>
                        <ul>
                            <li>
                                <a href="#">
                                    en
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ru
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ua
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-lg-8 d-flex justify-content-end align-items-center">
                <ul class="contacts-list contacts-list--flex d-none d-lg-flex">
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
                <a href="#" class="btn btn-primary d-none d-lg-inline-flex">
                    заказать такси
                </a>
                <div class="burger-menu">
                    <div class="line line--top"></div>
                    <div class="line line--middle"></div>
                    <div class="line line--bottom"></div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main id="app">