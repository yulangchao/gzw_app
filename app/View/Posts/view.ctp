<!-- File: /app/View/Posts/view.ctp -->


<div class="row container" style="margin:auto; margin-top:20px; min-height:500px;">
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-blog-single blog-single-full-view">
                                    <div class="blog-image">
                                        <a href="#"><img src="img/blog-details/1.jpg" alt="" />
                                        </a>
                                        <div class="blog-date">
                                            <p><span class="blog-day"><?= date('d', strtotime($post['Post']['created'])); ?></span> <?= date('M', strtotime($post['Post']['created'])); ?></p>
                                        </div>
                                    </div>
                                    <div class="blog-details blog-sig-details">
                                       <div class="details-blog-dt blog-sig-details-dt">
                                            <span><a href="#"><i class="fa fa-user"></i><?= date('H:i:s', strtotime($post['Post']['created'])); ?></a></span>
                                        </div>
                                        <h1><a class="blog-ht"><?php echo h($post['Post']['title']); ?></a></h1>
                                        <p><?php echo h($post['Post']['body']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


