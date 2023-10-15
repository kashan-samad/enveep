                        <?php foreach ($data->comments as &$value) : ?>
                        <div class="d-flex flex-row mt-3">
                            <div class="me-3">
                                <img src="images/<?php echo $value->imageUrl; ?>" class="img-thumbnail commentImage" alt="<?php echo $value->name; ?>">
                            </div>
                            <div class="d-flex flex-column col-8">
                                <div class="d-flex flex-row">
                                    <span>
                                        <h6><?php echo $value->name; ?></h6>
                                    </span>
                                    <div class="ps-3"><?php echo format_date($value->createdAt); ?></div>
                                </div>
                                <div>
                                <?php echo $value->content; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>