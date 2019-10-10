<!-- Reviews -->
<section id="reviews">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h2 class="section-title">
                    <?= $reviews['title']; ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-11 col-xl-9 mx-auto">
                <div class="reviews-item">
                    <div class="custom-tabs">
                        <div class="custom-tabs-nav">
                            <?php foreach ($reviews['reviews'] as $item) : ?>
                                <div class="custom-tabs-nav-item">
                                    <div class="reviews-author">
                                        <figure class="reviews-author__image"
                                                style="background-image: url('<?= $item['image']; ?>');"></figure>
                                        <div class="reviews-author__name">
                                            <?= $item['name']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="custom-tabs-body">
                            <?php foreach ($reviews['reviews'] as $item) : ?>
                                <div class="custom-tabs-body-item">
                                    <div class="reviews-description">
                                        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center">
                                            <div class="d-flex align-items-center mb-2 mb-lg-0">
                                                <div class="reviews-description__name">
                                                    <?= $item['name']; ?>
                                                </div>
                                                <div class="reviews-description__star">
                                                    <img src="<?= $feature['order_reviews_star_image']; ?>">
                                                </div>
                                            </div>
                                            <div class="reviews-description__date">
                                                <?= $item['date']; ?>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <?= $item['description']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>