    <?php foreach ($data as &$value) : ?>
    <article class="first mb-3">
        <figure>
            <?php echo format_post_image($value->title, $value->_id, $value->imageUrl); ?>
        </figure>
        <h1 class="entry-title mb-3">
            <?php echo 'An Open Letter to ' . format_recipient_link($value->recipientDetails->name, $value->recipientDetails->_id) . ' by ' . format_author_link($value->authorDetails->name, $value->authorDetails->_id); ?>
        </h1>
        <div class="entry-excerpt">
            <p>
                <?php echo formulate_substr_words($value->title, 160); ?>
            </p>
        </div>
        <div class="entry-meta align-items-center">
            <a class="author-avatar" href="<?php echo format_url('author', $value->authorDetails->name, $content->authorDetails->_id); ?>">
                <img src="<?php echo base_url('images/authors/' . $value->authorDetails->imageUrl); ?>" alt="<?php echo $value->authorDetails->name; ?>">
            </a>
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
    </article>
    <?php endforeach; ?>