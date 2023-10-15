    <?php foreach ($data as &$value) : ?>
    <article class="col-md-6">
        <div class="mb-3 d-flex row">
            <figure class="col-md-5">
                <?php echo format_post_image($value->title, $value->_id, $value->imageUrl, '512x512'); ?>
            </figure>
            <div class="entry-content col-md-7 pl-md-0">
                <h5 class="entry-title mb-3">
                    <?php echo format_post_link($value->title, $value->_id); ?>
                </h5>
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
            </div>
        </div>
    </article>
    <?php endforeach; ?>