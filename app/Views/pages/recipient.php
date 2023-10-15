    <div class="content-widget">
        <div class="container">
            <!--Begin Archive Header-->
            <div class="row">
                <div class="col-12 archive-header text-center pt-3 pb-3">
                    <h1 class="mb-3"><?php echo $recipient->name; ?></h1>
                    <p class="archive-intro"><?php echo $recipient->details; ?></p>
                </div>
            </div>
            <div class="divider"></div>
            <!--End Archive Header-->

            <!--Begin Featured Post-->
            <div class="row justify-content-between post-has-bg ml-0 mr-0">
                <div class="col-lg-6 col-md-4 bgcover d-none d-md-block pl-md-0 ml-0" style="background-image:url(<?php echo base_url('images/posts/' . $editor_pick_popular[0]->imageUrl); ?>);"></div>
                <div class="col-lg-6 col-md-8">
                    <div class="pt-5 pb-5 pl-md-5 pr-5 align-self-center">
                        <div class="capsSubtle mb-2">Editors' Pick</div>
                        <?php echo $widget_editor_pick_popular; ?>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <!--End Featured Post-->

            <div class="row">
                <?php echo $widget_recent_list; ?>
                <?php echo $widget_pagination; ?>
            </div>
        </div> <!--content-widget-->
    </div>