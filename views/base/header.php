<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        <?= $app_title ?>
    </title>

    <link rel="apple-touch-icon" sizes="57x57" href="../../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="../../fonts/font.css">
    <link rel="stylesheet" href="../../dist/app.css">
</head>

<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="arrow-prev" viewBox="0 0 11 18">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M11.0002 2.1L8.91917 -1.81934e-07L0.000244927 9L8.91916 18L11.0002 15.9L4.16241 9L11.0002 2.1Z"/>
    </symbol>
    <symbol id="arrow-next" viewBox="0 0 11 18">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M0.000244141 15.9L2.08132 18L11.0002 9L2.08133 0L0.000245369 2.1L6.83808 9L0.000244141 15.9Z"/>
    </symbol>
    <symbol id="youtube-icon" viewBox="0 0 40 29">
        <image width="40" height="29"
               xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAdCAYAAADYSS5zAAAB0UlEQVRYR82YPUscURSGn5O9o4UWi+7uiBoIKoJVmkDSCFZGCGhv5xaCEIPGYkUW3DKWSZnC/Ac7/Qf5CwExhRa6RISkCNnRI3dwJ0YI7szcC3O7gfO+52FmOB9XeHB0nCH+mDqwCEwDNUAexjl6VuAC+AYc0BftyymX973/SaxhsIrqHlB2BJDW5gqRhpx3PneFCaCG5gNKI62jl3hhT86jbesdA2o1WEF030uyrKYqdWl3vohWGUTMd2A4q5cn3Q80eiZaDdYR/eQpST5blXeiNXMIzOdz8qY+soCnwJi3FPmMzyxgBzDpffQEld8IM+m1PSsiC2iLZfqjfKQdvadWWgZaIJPpTR5X5AKUdrQRlyn7BcKgzg1NRJ8+nrb3CCeA3XQ6RT8/gzVUbZENe8f4f6RTwATU1lbMWyTuTLnaphfABLRMmT6zCWwBA1neqFfABHSUClHpK8hEWkjvgFoJXvBEm8BSWjgb7w1Qw+AVqi3gdRawrsY5oI6YOa7ZRZjLA+YcUKtmAWEHmHUB5gSQdrRJWHqDiv3HXroEuw+YtRcfg/wCnvsAu/OMe3Hhp5mCz4OFn6iLvpPE41KRt7qkXxZ5L/4LWeCbhQSyYHcztx7WzDjbNGKlAAAAAElFTkSuQmCC"/>
    </symbol>
    <symbol id="feature-guarantee" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M24.0651 6.39921L24.0306 5.98516L23.6154 5.97053C17.5649 5.75703 14.3984 1.84858 14.3675 1.80977L14.0008 1.34521L13.6329 1.80914C13.6016 1.84858 10.4351 5.757 4.38461 5.9705L3.9694 5.98513L3.93489 6.39918C3.9231 6.54079 3.65811 9.91402 4.72544 13.9207C6.14857 19.2634 9.29084 23.1326 13.8125 25.1101L14 25.1921L14.1874 25.1101C18.7091 23.1326 21.8514 19.2634 23.2745 13.9207C24.3419 9.91409 24.0769 6.54086 24.0651 6.39921ZM22.0442 7.90022C22.0224 9.13929 21.8797 11.2136 21.2749 13.4554C20.7069 15.5612 19.8482 17.4099 18.7229 18.9498C17.4801 20.6507 15.8919 21.9901 14 22.9335C12.1082 21.9901 10.52 20.6507 9.27708 18.9498C8.15176 17.4099 7.29318 15.5613 6.72499 13.4553C6.12043 11.214 5.97781 9.1395 5.95579 7.90019C9.88951 7.39976 12.5809 5.57748 14 4.3409C15.4191 5.57748 18.1106 7.39976 22.0442 7.90022Z"
              fill="white"/>
        <path d="M14 21.2297C12.6258 20.477 11.0847 19.2472 10.1571 17.9778C9.24179 16.7253 8.54347 15.2218 8.08147 13.509C7.58927 11.6844 7.47349 9.99592 7.45581 8.98844C10.3368 8.62245 12.7757 7.22504 14.0001 6.24805L14 21.2297Z"
              fill="white"/>
        <path d="M24.0651 6.39922L24.0306 5.98513L23.6154 5.97054C17.5649 5.75704 14.3984 1.84858 14.3675 1.80977L14.0008 1.34521L14 1.34616V4.3409C15.4191 5.57749 18.1105 7.39973 22.0443 7.90023C22.0224 9.1393 21.8797 11.2136 21.275 13.4553C20.7069 15.5612 19.8483 17.4098 18.723 18.9498C17.4801 20.6507 15.8919 21.9901 14 22.9335V25.1922L14.1875 25.1102C18.7092 23.1327 21.8515 19.2635 23.2746 13.9208C24.3419 9.91406 24.0769 6.54086 24.0651 6.39922Z"
              fill="white"/>
    </symbol>
    <symbol id="check-icon" viewBox="0 0 11 11">
        <g clip-path="url(#clip0)">
            <path d="M10.2625 2.73921C9.7707 1.8966 9.10355 1.22945 8.26092 0.737634C7.41813 0.245845 6.49812 0 5.50016 0C4.50231 0 3.58202 0.245845 2.73938 0.737634C1.8967 1.22937 1.22955 1.89652 0.73771 2.73921C0.245845 3.58194 0 4.50224 0 5.50001C0 6.49784 0.24592 7.41798 0.737634 8.26077C1.22945 9.10338 1.8966 9.77053 2.73928 10.2624C3.58202 10.7542 4.50224 11 5.50006 11C6.49789 11 7.41821 10.7542 8.26089 10.2624C9.10353 9.7707 9.77065 9.10338 10.2624 8.26077C10.7542 7.41806 11 6.49779 11 5.50001C11 4.50214 10.7542 3.58182 10.2625 2.73921ZM8.87313 7.45506C8.52462 8.05182 8.052 8.52462 7.45523 8.87313C6.85847 9.22165 6.20679 9.39573 5.50009 9.39573C4.79356 9.39573 4.14183 9.22165 3.54499 8.87313C2.94823 8.5246 2.4756 8.05182 2.12709 7.45506C1.7785 6.85829 1.60427 6.20659 1.60427 5.50001C1.60427 4.79338 1.77858 4.14168 2.12709 3.54492C2.47553 2.94815 2.94828 2.47543 3.54499 2.12694C4.14176 1.7784 4.79346 1.6042 5.50009 1.6042C6.20677 1.6042 6.85847 1.7784 7.45523 2.12694C8.052 2.47545 8.52465 2.94815 8.87313 3.54492C9.22167 4.14168 9.39583 4.79338 9.39583 5.50001C9.39583 6.20659 9.22167 6.85829 8.87313 7.45506Z"
                  fill="white"/>
            <path d="M7.65567 3.53058C7.56512 3.43988 7.45756 3.39453 7.33342 3.39453C7.20928 3.39453 7.10197 3.43991 7.01114 3.53058L5.04175 5.50003L3.98897 4.44724C3.89824 4.35654 3.79093 4.31119 3.66672 4.31119C3.5425 4.31119 3.4351 4.35656 3.34439 4.44724L2.61396 5.17778C2.52323 5.2684 2.47791 5.37589 2.47791 5.50003C2.47791 5.62409 2.52323 5.73157 2.61396 5.82222L4.71943 7.92772C4.81013 8.01835 4.91754 8.06385 5.04168 8.06385C5.16589 8.06385 5.27328 8.01837 5.36403 7.92772L8.38625 4.90554C8.47688 4.81494 8.52241 4.70751 8.52241 4.58342C8.52241 4.45931 8.47706 4.35187 8.38625 4.26117L7.65567 3.53058Z"
                  fill="white"/>
        </g>
        <defs>
            <clipPath id="clip0">
                <rect width="11" height="11" fill="white"/>
            </clipPath>
        </defs>
    </symbol>
    <symbol id="dropdown-arrow" viewBox="0 0 18 11">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M2.1 -6.95011e-07L-9.09669e-08 2.08108L9 11L18 2.08108L15.9 1.13698e-06L9 6.83784L2.1 -6.95011e-07Z"/>
    </symbol>

</svg>

<!-- App-header -->
<header id="app-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col d-flex align-items-center">
                <div class="burger-menu">
                    <div class="line line--top"></div>
                    <div class="line line--bottom"></div>
                </div>
                <div class="languages-menu">
                    <?php if ($locale == 'ua') : ?>
                        <a href="<?php echo url() . '?' . http_build_query(['hl' => 'ru']) ?>">ru</a>
                    <?php else : ?>
                        <a href="<?php echo url() . '?' . http_build_query(['hl' => 'ua']) ?>">ua</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col text-lg-center">
                <a href="/" class="logo">
                    <span>Smart</span>buster
                </a>
            </div>
            <div class="col d-none d-lg-block">
                <div class="header-buy d-flex justify-content-end align-items-center">
                    <span><?= $buy_info['buy_text']; ?></span>
                    <span><?= $buy_info['buy_price']; ?></span>
                    <a href="#" class="btn btn-primary open-order">
                        <?= $btn_buy; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="menu">
        <div class="menu-header">
            <div class="menu-buy d-flex flex-column flex-sm-row justify-content-end align-items-end align-items-sm-center">
                <span><?= $buy_info['buy_text']; ?></span>
                <span><?= $buy_info['buy_price']; ?></span>
                <a href="#" class="btn btn-primary open-order mt-2 mt-sm-0">
                    <?= $btn_buy; ?>
                </a>
            </div>
        </div>
        <nav class="menu-nav">
            <ul>
                <?php foreach ($nav as $section_name => $value) : ?>
                    <li>
                        <a href="<?= $section_name; ?>" class="scroll-link">
                            <?= $value?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
    <div class="menu-mask"></div>
</header>


<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>