<?php
require_once __DIR__ . '/language.php';

require_once('functions.php');

require_once('views/base/header-secondary.php');
?>

    <!-- Page Thanks -->
    <section id="page-thanks" class="page page-secondary">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="page-secondary-item">
                        <h1 class="title">
                            <?= $page_thanks['title']; ?>
                        </h1>
                        <div class="page-subtitle">
                            <?= $page_thanks['subtitle']; ?>
                        </div>
                        <a href="/" class="btn btn-primary">
                            <?= $btn_go_home; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="decor-bg"></div>
    </section>

<?php
require_once('views/base/footer-secondary.php');