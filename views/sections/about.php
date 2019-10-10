<!-- About -->
<section id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="about-item">
                    <div class="about-slider">
                        <?php $counter = 0;
                        foreach ($about['slider'] as $item) :
                            $counter++; ?>
                            <div class="about-slider-item">
                                <figure class="about-slider-item__image"
                                        style="background-image: url('<?= $item['image']; ?>');"></figure>
                                <h5 class="about-slider-item__title">
                                    <?= $item['title']; ?>
                                </h5>
                                <div class="about-slider-item__counter">
                                    <?php if ($counter < 10) echo '0' . $counter; else echo $counter ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="slider-arrow slider-arrow--about">
                            <div class="slider-arrow-item slider-arrow-item--prev">
                                <svg width="11" height="18">
                                    <use xlink:href="#arrow-prev"></use>
                                </svg>
                            </div>
                            <div class="slider-arrow-item slider-arrow-item--next">
                                <svg width="11" height="18">
                                    <use xlink:href="#arrow-next"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="about-description">
                        <h2 class="title">
                            <?= $about['title']; ?>
                        </h2>
                        <p class="description">
                            <?= $about['description'] ?>
                        </p>
                        <a href="#" class="btn btn-primary open-order">
                            <?= $btn_order; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>