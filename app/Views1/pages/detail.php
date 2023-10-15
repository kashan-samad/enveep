  <div class="container-fluid pt-5 mt-1">
        <nav style="--bs-breadcrumb-divider: ' >';" aria-label="breadcrumb">
            <ol class="breadcrumb mt-4 mb-4">
                <li class="breadcrumb-item "><a href="/">Home</a></li>
                <li class="breadcrumb-item "><a href="category/<?php echo $data->categoryDetails->slug ? $data->categoryDetails->slug : url_title($data->categoryDetails->title, '-', true); ?>"><?php echo $data->categoryDetails->title; ?></a></li>
                <li class="breadcrumb-item " aria-current="page"><?php echo $data->title; ?></li>
            </ol>
        </nav>
    </div>

    <main class="mainpage">
        <div class="container text-left bg-white rounded p-md-4 mb-5">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <img src="images/<?php echo $data->imageUrl; ?>" class="img-thumbnail mainimage" alt="<?php echo $data->authorDetails->name; ?>">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <span class="pt-3">
                                    <h5><?php echo $data->authorDetails->name; ?></h5>
                                </span>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <span class="pe-3"><?php echo format_date($data->createdAt);;?></span>
                                    <span class="pe-3"><?php echo $data->readTime;?> read</span>
                                    <span class="fa fa-thumbs-up pe-2"> <?php echo $data->likeCount;?></span>
                                    <span class="fa fa-thumbs-down"> <?php echo $data->dislikeCount;?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2 pt-6">
                            <button type="button" class="btn btn-primary write_cta">Follow</button>
                            <button type="button" class="btn btn-primary write_cta">Message</button>
                        </div>
                    </div>
                    <div class="row">
                        <h1><?php echo $data->title; ?></h1>
                    </div>
                    <div class="row text-center">
                        <img src="images/<?php echo $data->imageUrl; ?>" class="img-thumbnail contentImage" alt="<?php echo $data->title; ?>">
                    </div>
                    <div class="row mt-3">
                      <?php echo $data->content; ?>
                    </div>
                    <div>
                        <h4>Comments</h4>
                        <?php echo $widget_detail_page_post_comment; ?>
                        <?php echo $widget_detail_page_letter_comments; ?>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <?php echo $widget_right_panel_popular_letters; ?>
                    <?php echo $widget_right_panel_related_letters; ?>
                    <?php echo $widget_right_panel_popular_categories; ?>
                </div>
            </div>

        </div>
    </main>