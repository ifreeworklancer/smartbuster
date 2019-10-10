</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start align-items-center mb-3 mb-lg-0">
                <a href="/" class="logo mb-3 mb-sm-0 mr-sm-4">
                    <span>Smart</span>buster
                </a>
                <div class="sponsor-logo">
                    <img src="<?= $sponsor_logo; ?>" alt="">
                </div>
            </div>
            <div class="col-lg text-center mb-3 mb-lg-0">
                <div class="copyright">
                    <?= date('Y'); ?> <?= $copyright; ?>
                </div>
            </div>
            <div class="col-lg d-flex flex-column flex-sm-row justify-content-center justify-content-lg-end align-items-center">
                <div class="languages-menu mb-3 mb-sm-0">
                    <?php if ($locale == 'ua') : ?>
                        <a href="<?php echo url() . '?' . http_build_query(['hl' => 'ru']) ?>">ru</a>
                    <?php else : ?>
                        <a href="<?php echo url() . '?' . http_build_query(['hl' => 'ua']) ?>">ua</a>
                    <?php endif; ?>
                </div>
                <div class="footer-buy d-flex flex-column flex-sm-row justify-content-sm-end align-items-center align-items-sm-center">
                    <span><?= $buy_info['buy_text']; ?></span>
                    <span class="mb-2 mb-sm-0"><?= $buy_info['buy_price']; ?></span>
                    <a href="#" class="btn btn-primary open-order">
                        <?= $btn_buy; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>