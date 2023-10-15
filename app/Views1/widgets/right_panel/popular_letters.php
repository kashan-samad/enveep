                    <div>
                        <div>
                            <h2>Popular Letters</h2>
                        </div>
                        <div>
                            <?php foreach ($popular_letters as &$value) : ?>
                            <div class="col pb-3">
                                <div class="card custom-card pb-2 card_small">
                                    <!--image-->
                                    <img src="images/<?php echo $value->imageUrl; ?>" class="card-img-top " alt="<?php echo $value->title; ?>">
                                    <div class="card_img_overlay">
                                        <i class="material-icons ">bookmark</i>
                                    </div>

                                    <!--body-->
                                    <div class="card-body d-flex flex-column justify-content-between pt-6 ">
                                        <!--write details-->

                                        <!--card title on top of the image via absolute position in css-->
                                        <a href="detail/<?php echo $value->slug ? $value->slug : url_title($value->title, '-', true); ?>" style="text-decoration: none;"><h5 class="card-title custom-card-title"><?php echo $value->title; ?></h5></a>

                                        <!--card text -->
                                        <p class="card-text-detail mt-6"><?php echo $value->content; ?></p>

                                        <!--category chip above via absolute position in css-->
                                        <div class="category_chip"><?php echo $value->categoryDetails->title; ?></div>

                                    </div>
                                    <!--end of card body-->
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>