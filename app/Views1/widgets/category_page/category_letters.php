                            <?php foreach ($category_letters as &$value) : ?>
                            <div>
                                <div class="card hcards mb-3 col-md-12">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="images/<?php echo $value->imageUrl; ?>" class="img-fluid rounded-start hcard-image" alt="<?php echo $value->title; ?>">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title custom-card-title">
                                                    <a href="detail" class="card-title custom-card-title"><?php echo $value->title; ?></a>
                                                </h5>
                                                <p class="card-text fs-6 lh-sm"><?php echo $value->content; ?>
                                                </p>
                                                <p class="card-text"><small class="text-muted">Last updated <?php echo format_date($value->createdAt); ?> ago</small><br><small class="text-muted">by <?php echo $value->authorDetails->name; ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>