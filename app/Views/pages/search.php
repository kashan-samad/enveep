    <div class="content-widget">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="spanborder">
                        Search resual for
                        <span>"Culture"</span>
                    </h4>

                    <?php echo $widget_search_list; ?>
                    <?php echo $widget_pagination; ?>

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