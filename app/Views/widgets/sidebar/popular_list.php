    <?php $count = 1; foreach ($data as &$value) : ?>
    <li class="d-flex">
        <div class="post-count">
            <?php echo format_count($count++); ?>
        </div>
        <div class="post-content">
            <h5 class="entry-title mb-3">
                <?php echo format_post_link($value->title, $value->_id); ?>
            </h5>
            <div class="entry-meta align-items-center">
                <?php echo format_author_link($value->authorDetails->name, $value->authorDetails->_id); ?> in <?php echo format_category_link($value->categoryDetails->title); ?>
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
    </li>
    <?php endforeach; ?>
