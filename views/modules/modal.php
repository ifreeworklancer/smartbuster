<div class="custom-modal custom-modal--order">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-prev">
        <figure class="order-image" style="background-image: url('<?= $modal_order['image']; ?>');"></figure>
        <div class="order-description">
            <div class="order-description__text">
                <?= $modal_order['order_description']; ?>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <span class="price-title">
                    <?= $modal_order['order_price_text']; ?>
                </span>
                <span class="price-value">
                    <?= $modal_order['order_price_value'] ?>
                </span>
            </div>
        </div>
    </div>
    <div class="custom-modal-body">
        <h3 class="title">
            <?= $modal_order['title']; ?>
        </h3>
        <p class="description">
            <?= $modal_order['description']; ?>
        </p>
        <form action="../../mail-send.php" method="post">
            <div class="form-column">
                <div class="form-group">
                    <label for="name" class="label-placeholder"><?= $modal_order['input_name']; ?></label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="label-placeholder"><?= $modal_order['input_phone']; ?></label>
                    <input type="tel" id="phone" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email" class="label-placeholder"><?= $modal_order['input_email']; ?></label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <button class="btn btn-primary">
                    <?= $btn_order_complete; ?>
                </button>
            </div>
        </form>
    </div>
</div>

<div class="modal-mask"></div>