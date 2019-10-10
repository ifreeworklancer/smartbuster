<!-- Advantages -->
<section id="advantages">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 text-center mx-auto">
                <h2 class="section-title">
                    <?= $advantages['title']; ?>
                </h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-4 col-lg-3">
                <ul class="advantages-list">
                    <?php foreach ($advantages['list_first'] as $item) : ?>
                        <li class="advantages-list-item">
                            <div class="icon">
                                <img src="<?= $item['icon']; ?>" alt="icon">
                            </div>
                            <?= $item['description']; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-sm-4">
                <figure class="advantages-image"
                        style="background-image: url('<?= $advantages['image']; ?>');"></figure>
            </div>
            <div class="col-sm-4 col-lg-3">
                <ul class="advantages-list">
                    <?php foreach ($advantages['list_second'] as $item) : ?>
                        <li class="advantages-list-item">
                            <div class="icon">
                                <img src="<?= $item['icon']; ?>" alt="icon">
                            </div>
                            <?= $item['description']; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="decor-bg"></div>
</section>