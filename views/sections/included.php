<!-- Included -->
<section id="included">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="included-item d-flex justify-content-between">
                    <div class="included-description">
                        <h3 class="title">
                            <?= $included['title']; ?>
                        </h3>
                        <div class="d-flex flex-column flex-sm-row">
                            <ul class="included-list">
                                <?php foreach ($included['list_first'] as $item) : ?>
                                    <li><?= $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <ul class="included-list">
                                <?php foreach ($included['list_second'] as $item) : ?>
                                    <li><?= $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <figure class="included-image"
                            style="background-image: url('<?= $included['image']; ?>');"></figure>
                </div>
            </div>
        </div>
    </div>
</section>