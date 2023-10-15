                <div class="home-banner1">
                    <div class="home-banner"></div>
                    <div class="home-banner-logo">
                        <img class="home-banner-logo-image" src="<?php echo base_url('images/enveep-logo.png'); ?>">
                        <h3 class="home-banner-h3">Express yourself!</h3>
                    </div>
                </div>
                <div class="section-featured featured-style-1">
                    <div class="container">
                        <div class="row">
                            <!--begin featured-->
                            <div class="col-sm-12 col-md-9 col-xl-9">
                                <h2 class="spanborder h4">
                                    <span>Editor's Picks</span>
                                 </h2>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <?php echo $widget_editor_pick_primary; ?>
                                        <a class="btn btn-orange d-inline-block mb-4 mb-md-0" href="search">All Featured</a>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <?php echo $widget_editor_pick_secondary; ?>
                                    </div>
                                </div>
                            </div><!--end featured-->

                            <!--begin Trending-->
                            <div class="col-sm-12 col-md-3 col-xl-3">
                                <div class="sidebar-widget latest-tpl-4">
                                    <h4 class="spanborder">
                                        <span>Trending</span>
                                    </h4>
                                    <ol>
                                        <?php echo $widget_trending_list; ?>
                                    </ol>
                                </div>

                                <a class="link-green" href="search">See all trending<svg class="svgIcon-use" width="19" height="19"><path d="M7.6 5.138L12.03 9.5 7.6 13.862l-.554-.554L10.854 9.5 7.046 5.692" fill-rule="evenodd"></path></svg></a>

                            </div> <!--end Trending-->
                        </div> <!--end row-->
                        <div class="divider"></div>
                    </div> <!--end container-->
                </div> <!--section-featured-->

                <div class="content-widget">
                    <div class="container">
                        <div class="row justify-content-between post-has-bg ml-0 mr-0">
                            <div class="col-lg-6 col-md-8">
                                <div class="pt-5 pb-5 pl-md-5 pr-5 align-self-center">
                                    <div class="capsSubtle mb-2">Editors' Pick</div>
                                    <?php echo $widget_editor_pick_popular; ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 bgcover d-none d-md-block pl-md-0 ml-0" style="background-image:url(images/thumb/thumb-800x495.jpg);"></div>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div> <!--content-widget-->

                <div class="content-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="row justify-content-between">
                                    <?php echo $widget_random_medium; ?>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sidebar-widget ads">
                                    <a href="#"><img src="images/ads/ads-1.png" alt="ads"></a>
                                </div>
                            </div>
                        </div>
                        <div class="divider-2"></div>
                    </div>
                </div> <!--content-widget-->

                <div class="content-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="spanborder h4">
                                    <span>Most Recent</span>
                                </h2>
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
                                    <h4 class="spanborder">
                                        <span>Popular</span>
                                    </h4>
                                    <ol>
                                        <?php echo $widget_popular_list; ?>
                                    </ol>
                                </div>
                            </div> <!--col-md-4-->
                        </div>
                    </div> <!--content-widget-->
                </div>