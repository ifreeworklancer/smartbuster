<!-- Video review -->
<section id="video-review">
    <div class="container">
        <div class="col-sm-7 mx-auto">
            <div class="video-review" data-youtube="<?= getVideoLinkAttribute($video_review['link']); ?>"
                 style="background-image: url('<?= getVideoImageLinkAttribute($video_review['link']); ?>');">
                <svg width="40" height="30">
                    <use xlink:href="#youtube-icon"></use>
                </svg>
            </div>
        </div>
    </div>
</section>