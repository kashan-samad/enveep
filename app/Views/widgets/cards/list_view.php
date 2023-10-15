    <?php foreach ($data as &$value) : ?>
    <article class="row justify-content-between mb-5 mr-0">
        <div class="col-md-9 ">
            <div class="align-self-center">
                <div class="capsSubtle mb-2"><?php echo $value->categoryDetails->title; ?></div>
                <h3 class="entry-title mb-3">
                    <?php echo format_post_link($value->title, $value->_id); ?>
                </h3>
                <div class="entry-excerpt">
                    <p>
                        <?php echo formulate_substr_words($value->content, 160); ?>
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
            </div>
        </div>
        <div class="col-md-3 bgcover" style="background-image:url(images/thumb/thumb-800x495.jpg);"></div>
    </article>
    <?php endforeach; ?>