                <div class="content-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="box box-author m_b_2rem">
                                    <div class="post-author row-flex">
                                        <div class="author-img">
                                            <img alt="author avatar" src="images/author-avata-1.jpg" class="avatar">
                                        </div>
                                        <div class="author-content">
                                        <div class="top-author">
                                            <h5 class="heading-font"><a href="author" title="Ryan" rel="author">Ryan Mark</a></h5></div>
                                            <p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet ut ligula et semper. Aenean consectetur, est id gravida venenatis.</p>
                                            <div class="content-social-author">
                                                <a target="_blank" class="author-social" href="#">Facebook </a>
                                                <a target="_blank" class="author-social" href="#">Twitter </a>
                                                <a target="_blank" class="author-social" href="#"> Google + </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="spanborder">
                                    <span>Latest Posts</span>
                                </h4>

                                <?php echo $widget_recent_list; ?>

                                <div class="row justify-content-between">
                                    <div class="divider-2"></div>
                                    <?php echo $widget_random_small; ?>
                                </div>
                                <?php echo $widget_random_list; ?>
                                <ul class="page-numbers heading">
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><a class="page-numbers" href="#">4</a></li>
                                    <li><a class="page-numbers" href="#">5</a></li>
                                    <li><a class="page-numbers" href="#">...</a></li>
                                    <li><a class="page-numbers" href="#">98</a></li>
                                    <li><a class="next page-numbers" href="#"><i class="icon-right-open-big"></i></a></li>
                                </ul>

                            </div> <!--col-md-8-->
                            <div class="col-md-4 pl-md-5 sticky-sidebar">
                                <div class="sidebar-widget latest-tpl-4">
                                    <h5 class="spanborder widget-title">
                                        <span>Hightlight posts</span>
                                    </h5>
                                    <ol>
                                        <?php echo $widget_highlight_posts; ?>
                                    </ol>
                                </div>
                            </div> <!--col-md-4-->
                        </div>
                    </div> <!--content-widget-->
                </div>

