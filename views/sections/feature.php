<!-- Feature -->
<section id="feature">
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-8 col-lg-6">
                <h2 class="section-title">
                    <?= $feature['title']; ?>
                </h2>
                <div class="feature-gallery">
                    <div class="custom-tabs">
                        <div class="custom-tabs-body">
                            <?php foreach ($feature['gallery'] as $item) : ?>
                                <div class="custom-tabs-body-item">
                                    <figure style="background-image: url('<?= $item; ?>');"></figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="custom-tabs-nav">
                            <?php foreach ($feature['gallery'] as $item) : ?>
                                <div class="custom-tabs-nav-item">
                                    <figure style="background-image: url('<?= $item; ?>');"></figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="custom-dropdown">
                    <div class="custom-dropdown-input">
                        <div class="custom-dropdown-input__title">
                            <?= $feature['feature_text']; ?>
                        </div>
                        <div class="custom-dropdown-input__icon">
                            <svg width="11" height="18">
                                <use xlink:href="#dropdown-arrow"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="custom-dropdown-body">
                        <ul class="custom-dropdown-body-list custom-dropdown-body-list--important mb-4">
                            <?php foreach ($feature['feature_important'] as $item) : ?>
                                <li>
                                    <span class="info">
                                        <?= $item['title']; ?>
                                    </span>
                                    <span class="value">
                                        <?= $item['value']; ?>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <h6 class="title">
                            <?= $feature['feature_secondary_text']; ?>
                        </h6>
                        <ul class="custom-dropdown-body-list custom-dropdown-body-list--secondary">
                            <?php foreach ($feature['feature_secondary'] as $item) : ?>
                                <li>
                                    <?= $item; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul class="custom-dropdown-body-list custom-dropdown-body-list--important">
                            <?php foreach ($feature['feature_important_secondary'] as $item) : ?>
                                <li>
                                    <span class="info">
                                        <?= $item['title']; ?>
                                    </span>
                                    <span class="value">
                                        <?= $item['value']; ?>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-lg-6 col-xxl-4">
                <div class="feature-order">
                    <h3 class="title">
                        <?= $feature['order_title']; ?>
                    </h3>
                    <p class="description">
                        <?= $feature['order_description']; ?>
                    </p>
                    <div class="feature-order-review">
                        <div class="feature-order-review-item">
                            <div class="feature-order-review-item__icon">
                                <img src="<?= $feature['order_reviews_star_image'] ?>">
                            </div>
                            <div class="feature-order-review-item__title">
                                <?= $feature['order_reviews']; ?>
                            </div>
                        </div>
                        <div class="feature-order-review-item">
                            <div class="feature-order-review-item__icon">
                                <svg width="25" height="25">
                                    <use xlink:href="#feature-guarantee"></use>
                                </svg>
                            </div>
                            <div class="feature-order-review-item__title">
                                <?= $feature['order_guarantee']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="feature-order-price">
                        <div class="feature-order-price-row">
                            <span class="price-title"><?= $feature['order_price_title'] ?></span>
                            <span class="price-value price-value--old"><?= $feature['order_price_old'] ?></span>
                        </div>
                        <div class="feature-order-price-row">
                            <span class="price-title price-title--transparent d-none d-md-block"><?= $feature['order_price_title'] ?></span>
                            <span class="price-value"><?= $feature['order_price'] ?></span>
                            <span class="price-sale-text">
                                <svg width="11" height="11">
                                    <use xlink:href="#check-icon"></use>
                                </svg>
                                <?= $feature['order_sale_text'] ?>
                            </span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary d-flex open-order">
                        <?= $btn_order; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="decor-bg"></div>
</section>