    <?php foreach ($data as &$value) : ?>
    <h2 class="entry-title mb-3">
        <?php echo format_post_link($value->title, $value->_id); ?>
    </h2>
    <div class="entry-excerpt">
        <p>
            <?php echo formulate_substr_words($value->tagLine, 240); ?>
        </p>
    </div>
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
    <?php endforeach; ?>