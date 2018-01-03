<!-- File: /app/View/Posts/view.ctp -->

        <!-- Start Blog area -->
        <div class="latest-blog-area pd-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-blog-single blog-single-full-view">
                                    <div class="blog-image">
                                        <a href="#"><img style="height:446px;" src="<?php echo $post['BrwImage']['main'] ? $post['BrwImage']['main']['url'] : '/img/blog-details/1.jpg'; ?>" alt="" />
                                        </a>
                                        <div class="blog-date">
                                            <p><span class="blog-day"><?= date('d', strtotime($post['Post']['created'])); ?></span> <?= date('M', strtotime($post['Post']['created'])); ?></p>
                                        </div>
                                    </div>
                                    <div class="blog-details blog-sig-details">
                                        <div class="details-blog-dt blog-sig-details-dt">
                                            <span><a href="#"></a></span>
                                            <span><a href="#"></a></span>
                                            <span class="pull-right"><a href="#"><i class="fa fa-clock-o"></i> <?= date('Y/m/d H:i:s', strtotime($post['Post']['created'])); ?></a></span>
                                        </div>
                                        <h1><a class="blog-ht" href="#"><?= $post['Post']['title']; ?></a></h1>
                                        <?= $post['Post']['body']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="blog-search-bx res-mg-tp blog-search-res">
                            <input type="text" placeholder="Search" />
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="left-sidebar-category category-blog-sidebar">
                            <h3>categories</h3>
                            <ul class="category-nav">
                                <li><a href="#">Luxury</a>
                                </li>
                                <li><a href="#">Buy</a>
                                </li>
                                <li><a href="#">Rent</a>
                                </li>
                                <li><a href="#">Sell</a>
                                </li>
                                <li><a href="#">Plasant</a>
                                </li>
                                <li><a href="#">Complete</a>
                                </li>
                                <li><a href="#">Sale</a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-latest-blog-area">
                            <h2>latest post</h2>
                            <div class="blog-single">
                                <a href="#"><img src="/img/blog-details/latest-blog/1.jpg" alt="" />
                                </a>
                                <div class="blog-details custom-blog-date">
                                    <a href="#">Blog image post</a>
                                    <p>10 August 2016</p>
                                </div>
                            </div>
                            <div class="blog-single">
                                <a href="#"><img src="/img/blog-details/latest-blog/2.jpg" alt="" />
                                </a>
                                <div class="blog-details custom-blog-date">
                                    <a href="#">Blog image post</a>
                                    <p>10 August 2016</p>
                                </div>
                            </div>
                            <div class="blog-single">
                                <a href="#"><img src="/img/blog-details/latest-blog/3.jpg" alt="" />
                                </a>
                                <div class="blog-details custom-blog-date">
                                    <a href="#">Blog image post</a>
                                    <p>10 August 2016</p>
                                </div>
                            </div>
                            <div class="blog-single">
                                <a href="#"><img src="/img/blog-details/latest-blog/4.jpg" alt="" />
                                </a>
                                <div class="blog-details custom-blog-date">
                                    <a href="#">Blog image post</a>
                                    <p>10 August 2016</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-tag">
                            <h2>Tag</h2>
                            <a href="#">Design</a>
                            <a href="#">Interior</a>
                            <a href="#">Branding</a>
                            <a href="#">Image</a>
                            <a href="#">Gallery</a>
                            <a href="#">Video</a>
                            <a href="#">Social</a>
                            <a href="#">Art</a>
                            <a href="#">Business</a>
                        </div>
                        <div class="blog-feed-area">
                            <h2>instagram feed</h2>
                            <a href="#"><img src="/img/blog-details/intragram/1.jpg" alt="" />
                            </a>
                            <a href="#"><img src="/img/blog-details/intragram/2.jpg" alt="" />
                            </a>
                            <a href="#"><img src="/img/blog-details/intragram/3.jpg" alt="" />
                            </a>
                            <a href="#"><img src="/img/blog-details/intragram/4.jpg" alt="" />
                            </a>
                            <a href="#"><img src="/img/blog-details/intragram/5.jpg" alt="" />
                            </a>
                            <a href="#"><img src="/img/blog-details/intragram/6.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog area -->