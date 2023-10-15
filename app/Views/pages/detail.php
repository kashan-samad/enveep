    <div class="container">
        <div class="entry-header">
            <div class="mb-5">
                <h1 class="entry-title m_b_2rem">
                    <?php echo $content->title; ?>
                </h1>
                <div class="entry-meta align-items-center">
                    <a class="author-avatar" href="<?php echo format_url('author', $content->authorDetails->name, $content->authorDetails->_id); ?>">
                        <img src="<?php echo base_url('images/authors/' . $content->authorDetails->imageUrl); ?>" alt="<?php echo $content->authorDetails->name; ?>">
                    </a>
                    <?php echo format_author_link($content->authorDetails->name, $content->authorDetails->_id); ?> in <?php echo format_category_link($content->categoryDetails->title); ?>
                    <br />
                    <span>
                        <?php echo short_date($content->createdAt); ?>
                    </span>
                    <span class="middotDivider"></span>
                    <span class="readingTime" title="<?php echo format_read_time($content->readTime); ?>">
                        <?php echo format_read_time($content->readTime); ?>
                    </span>
                    <?php echo format_read_icon(); ?>
                </div>
            </div>
        </div> <!--end single header-->
        <figure class="image zoom mb-5">
            <img src="<?php echo base_url('images/posts/' . $content->imageUrl); ?>" alt="<?php echo $content->title; ?>" />
        </figure>  <!--figure-->
        <article class="entry-wraper mb-5">
            <div class="entry-left-col">
                <div class="social-sticky">
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-heart"></i></a>
                    <a href="#"><i class="icon-paper-plane"></i></a>
                </div>
            </div>
            <div class="excerpt mb-4">
                <p>
                    <?php echo $content->tagLine; ?>
                </p>
            </div>
            <div class="entry-main-content dropcap">
                <p><?php echo $content->content; ?></p>
                <p>Gosh jaguar ostrich quail one excited dear hello and <a href="#">bound</a><sup><a href="#">[1]</a></sup> and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.</p>
                <p>Thanks sniffed in hello after in foolhardy and some far purposefully much one at the much conjointly leapt skimpily that quail sheep some goodness <a href="#">nightingale</a> the instead exited expedient up far ouch mellifluous altruistic and and lighted more instead much when ferret but the.</p>
                <hr class="section-divider">
                <p>Yet more some certainly yet alas abandonedly whispered <a href="#">intriguingly</a><sup><a href="#">[2]</a></sup> well extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less <a href="#">however</a> hawk yet oh scratched ostrich some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
                <h2>The Guitar Legends</h2>
                <p>Furrowed this in the upset <a href="#">some across</a><sup><a href="#">[3]</a></sup> tiger oh loaded house gosh whispered <a href="#">faltering alas</a><sup><a href="#">[4]</a></sup> ouch cuckoo coward in scratched undid together bit fumblingly so besides salamander heron during the jeepers hello fitting jauntily much smoothly globefish darn blessedly far so along bluebird leopard and.</p>
                <blockquote><p>Integer eu faucibus <a href="#">dolor</a><sup><a href="#">[5]</a></sup>. Ut venenatis tincidunt diam elementum imperdiet. Etiam accumsan semper nisl eu congue. Sed aliquam magna erat, ac eleifend lacus rhoncus in.</p></blockquote>
                <p>Fretful human far recklessly while caterpillar well a well blubbered added one a some far whispered rampantly whispered while irksome far clung irrespective wailed more rosily and where saluted while black dear so yikes as considering recast to some crass until cow much less and rakishly overdrew consistent for by responsible oh one hypocritical less bastard hey oversaw zebra browbeat a well.</p>
                <h3>Getting Crypto Rich</h3>
                <p>And far contrary smoked some contrary among stealthy engagingly suspiciously a cockatoo far circa sank dully lewd slick cracked llama the much gecko yikes more squirrel sniffed this and the the much within uninhibited this abominable a blubbered overdid foresaw through alas the pessimistic.</p>
                <p>Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.</p>
                <hr class="section-divider">
                <p>Thanks sniffed in hello after in foolhardy and some far purposefully much one at the much conjointly leapt skimpily that quail sheep some goodness nightingale the instead exited expedient up far ouch mellifluous altruistic and and lighted more instead much when ferret but the.</p>
                <!--Begin Subcrible-->
                <!-- <div class="border p-5 bg-lightblue mb-5">
                    <div class="row justify-content-between">
                        <div class="col-md-5 mb-2 mb-md-0">
                            <h5 class="font-weight-bold secondfont mb-3 mt-0">Become a member</h5>
                            <p class="small-text">Get the latest news right in your inbox. We never spam!</p>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Enter your e-mail address">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <button type="submit" class="btn btn-success btn-block">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--End Subcrible-->
                <p>Yet more some certainly yet alas abandonedly whispered intriguingly well extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less however hawk yet oh scratched ostrich some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
            </div>
            <div class="entry-bottom">
                <div class="tags-wrap heading">
                    <span class="tags">
                        <?php foreach ($content->tags as &$tag) : ?>
                            <a href="<?php echo format_url('tag', $tag); ?>" rel="tag"><?php echo $tag; ?></a>
                        <?php endforeach; ?>
                    </span>
                </div>
            </div>
            <div class="box box-author m_b_2rem">
                <div class="post-author row-flex">
                    <div class="author-img">
                        <img alt="<?php echo $content->authorDetails->name; ?>" src="<?php echo base_url('images/authors/' . $content->authorDetails->imageUrl); ?>" class="avatar">
                    </div>
                    <div class="author-content">
                    <div class="top-author">
                        <h5 class="heading-font"><a href="author.html" title="Ryan" rel="author"><?php echo $content->authorDetails->name; ?></a></h5></div>
                        <p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet ut ligula et semper. Aenean consectetur, est id gravida venenatis.</p>
                        <div class="content-social-author">
                            <a target="_blank" class="author-social" href="#">Facebook </a>
                            <a target="_blank" class="author-social" href="#">Twitter </a>
                            <a target="_blank" class="author-social" href="#"> Google + </a>
                        </div>
                    </div>
                </div>
            </div>
        </article> <!--entry-content-->

        <!--Begin post related-->
        <div class="related-posts mb-5">
            <h4 class="spanborder text-center">
                <span>Related Posts</span>
            </h4>
            <div class="row justify-content-between">
                <div class="divider-2"></div>
                <?php echo $widget_related_posts; ?>
            </div>
        </div>
        <!--End post related-->

        <!--Begin Comment-->
        <div class="single-comment comments_wrap">
            <section id="comments">
                <div class="comments-inner clr">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>
                        <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                        <p class="comment-notes">
                            <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                        </p>
                        <p class="comment-form-comment">
                            <label for="comment">Comment</label>
                            <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                        </p>
                        <div class="row">
                            <div class="comment-form-author col-sm-12 col-md-6">
                                <p>
                                    <label for="author">Name*</label>
                                    <input id="author" name="author" type="text" value="" size="30" aria-required="true">
                                </p>
                            </div>
                            <div class="comment-form-email col-sm-12 col-md-6">
                                <p>
                                    <label for="email">Email*</label>
                                    <input id="email" name="email" type="email" value="" size="30" aria-required="true">
                                </p>
                            </div>
                        </div>
                        <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit btn btn-success btn-block" value="Post Comment">
                        </p>
                        </form>
                    </div>
                    <!-- #respond -->
                </div>
            </section>
        </div>
        <!--End Comment-->
    </div> <!--container-->