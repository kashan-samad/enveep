    <?php foreach ($data as &$value) : ?>
    <article class="post-list-style-2 mb-5 col-md-4">
        <a href="single.html"><figure class="bgcover" style="background-image:url(<?php echo base_url('images/posts/thumbnails/' . $value->_id . '/thumb-512x512.jpg'); ?>);"></figure></a>
        <h3 class="entry-title mb-3"><?php echo format_post_link($value->title, $value->_id); ?></h3>
        <div class="entry-excerpt">
            <p>
                <?php echo formulate_substr_words($value->title, 160); ?>
            </p>
        </div>
        <div class="entry-meta align-items-center">
            <?php echo 'An Open Letter to ' . format_recipient_link($value->recipientDetails->name, $value->recipientDetails->_id) . ' by ' . format_author_link($value->authorDetails->name, $value->authorDetails->_id); ?>
            <br />
            <span>
                <?php echo short_date($value->createdAt); ?>
            </span>
            <span class="middotDivider"></span>
            <span class="readingTime" title="<?php echo format_read_time($value->readTime); ?>">
                <?php echo format_read_time($value->readTime); ?>
            </span>
            <?php echo format_read_icon(); ?>
        </div>
    </article>
    <?php endforeach; ?>