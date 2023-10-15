                            <div class="col-md-4 pl-md-5 sticky-sidebar">
                                <div class="sidebar-widget latest-tpl-4">
                                    <h5 class="spanborder widget-title">
                                        <span>Popular in Culture</span>
                                    </h5>
                                    <ol>
                                        <?php $count = 1; ?>
                                        <?php foreach ($popular_list as &$value) : ?>
                                        <li class="d-flex">
                                            <div class="post-count"><?php echo str_pad($count++, 2, '0', STR_PAD_LEFT);; ?></div>
                                            <div class="post-content">
                                                <h5 class="entry-title mb-3"><a href="letters/<?php echo url_title($value->title, '-', true); ?>"><?php echo $value->title; ?></a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="authors/<?php echo url_title($value->authorDetails->name, '-', true); ?>"><?php echo $value->authorDetails->name; ?></a> in <a href="categories/<?php echo url_title($value->categoryDetails->title, '-', true); ?>"><?php echo $value->categoryDetails->title; ?></a><br>
                                                    <span><?php echo short_date($value->createdAt); ?></span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="<?php echo $value->readTime; ?> read"><?php echo $value->readTime; ?> read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endforeach; ?>
                                    </ol>
                                </div>
                            </div> <!--col-md-4-->