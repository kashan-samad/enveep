                    <div>
                        <div>
                            <h2>Popular Categories</h2>
                        </div>
                        <div>
                            <?php foreach ($popular_categories as &$value) : ?>
                            <a href="category/<?php echo $value->slug ? $value->slug : url_title($value->title, '-', true); ?>" style="text-decoration: none;"><button type="button" class="btn btn-light category"><?php echo $value->title; ?></button></a>
                            <?php endforeach; ?>
                        </div>
                    </div>