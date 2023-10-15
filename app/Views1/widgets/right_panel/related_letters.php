                    <div>
                        <div>
                            <h2>Related Letters</h2>
                        </div>
                        <div>
                            <?php foreach ($related_letters as &$value) : ?>
                            <div class="d-flex flex-row mb-3 related-letter-card">
                                <img src="images/<?php echo $value->imageUrl; ?>" class="p-1 relatedImage" alt="<?php echo $value->title; ?>">
                                <div class="ms-2">
                                    <a href="detail/<?php echo $value->slug ? $value->slug : url_title($value->title, '-', true); ?>" style="text-decoration: none;"><h6><?php echo $value->title; ?> by <?php echo $value->authorDetails->name; ?></h6></a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>