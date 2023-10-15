    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h2>Trending letters</h2>
                <div class="mt-3">
                    <div class="row row-cols-1 row-cols-md-3 g-2">
                        <?php foreach ($trending_letters as &$value) : ?>
                        <div class="col ">
                            <div class="card custom-card pb-2">
                                <!--image-->
                                <img src="<?php echo 'images/'.$value->imageUrl; ?>" class="card-img-top">
                                <div class="card_img_overlay">
                                    <i class="material-icons ">bookmark</i>
                                    <p class="read_time"> <?php echo $value->readTime; ?> read </p>
                                </div>
                                <!--body-->
                                <div class="card-body d-flex flex-column justify-content-around pt-3 ">
                                    <!--write details-->
                                    <div class="d-flex flex-column gap-0 mb-1">
                                        <div>
                                            <div class="date text-muted"> <?php echo format_date($value->createdAt); ?> </div>
                                        </div>
                                        <div class="by text-muted"> <?php echo $value->authorDetails->name; ?> </div>
                                    </div>
                                    <!--card title on top of the image via absolute position in css-->
                                    <h5 class="card-title custom-card-title">
                                        <a href="detail/<?php echo $value->slug ? $value->slug : url_title($value->title, '-', true); ?>" class="card-title custom-card-title"><?php echo $value->title; ?></a>
                                    </h5>

                                    <!--card text and comments-->
                                    <div>
                                        <p class="card-text fs-6 lh-sm"><?php echo $value->content; ?> </p>
                                        <i class="material-icons text-muted ">question_answer</i>
                                        <span class="text-muted"><?php echo count($value->comments); ?> comments</span>
                                    </div>

                                    <!--category chip above via absolute position in css-->
                                    <div class="category_chip"><?php echo $value->categoryDetails->title; ?></div>

                                </div>
                                <!--end of card body-->
                            </div>
                            <!--end of card-->
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-2 see-all-div">
                <a href="#" class="see-all">See All</a>
            </div>
        </div>
    </div>
