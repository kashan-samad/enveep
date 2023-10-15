                            <?php foreach ($data as &$value) : ?>
                            <article class="row justify-content-between mb-5 mr-0">
                                <div class="col-md-9 ">
                                    <div class="align-self-center">
                                        <div class="capsSubtle mb-2">Editors' Pick</div>
                                        <h3 class="entry-title mb-3"><a href="letters/<?php echo url_title($value->title, '-', true); ?>"><?php echo $value->title; ?></a></h3>
                                        <div class="entry-excerpt">
                                            <p>
                                                <?php echo $value->content; ?>
                                            </p>
                                        </div>
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
                                </div>
                                <div class="col-md-3 bgcover" style="background-image:url(assets/images/thumb/thumb-800x495.jpg);"></div>
                            </article>
                            <?php endforeach; ?>