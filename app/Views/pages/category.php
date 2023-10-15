                <div class="content-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="spanborder">
                                    <span><?php echo $category; ?></span>
                                </h4>
                                <?php echo $widget_category_single; ?>
                                <div class="divider"></div>
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
                                        <span>Popular in <?php echo $category; ?></span>
                                    </h5>
                                    <ol>
                                        <?php echo $widget_popular_list; ?>
                                    </ol>
                                </div>
                            </div> <!--col-md-4-->
                        </div>
                    </div> <!--content-widget-->
                </div>