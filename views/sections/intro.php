<!-- Intro -->
<section id="intro">
    <div class="container-fluid h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-sm-9 col-md-6 col-lg-5">
                <div class="intro-item">
                    <div class="section-description">
                        <div class="subtitle">
                            <?= $intro['subtitle']; ?>
                        </div>
                        <h1 class="title">
                            <?= $intro['title']; ?>
                        </h1>
                        <p class="description">
                            <?= $intro['description']; ?>
                        </p>
                    </div>
                    <div class="intro-buy d-flex flex-column flex-sm-row justify-content-between align-items-center">
                        <div class="intro-buy-text mb-3 mb-sm-0">
                            <span class="intro-buy-text__title"><?= $intro['buy_text']; ?></span>
                            <span class="intro-buy-text__value"><?= $intro['buy_price']; ?></span>
                        </div>
                        <a href="#" class="btn btn-primary open-order">
                            <?= $btn_order; ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-5">
                <figure class="intro-image" style="background-image: url('<?= $intro['image']; ?>');"></figure>
            </div>
        </div>
    </div>
    <div class="image-bg"></div>
</section>
