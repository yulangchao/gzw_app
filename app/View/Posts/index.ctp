<!-- File: /app/View/Posts/index.ctp -->

<div class="row container" style="margin:auto">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="blog-main-heading">
        <h1>Latest Blog</h1>
     </div>
</div>



    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bl-res-mg-bt" style="margin-top:80px;">
    <div class="single-blog-item">
        <div class="single-blog-image">
            <a href="/posts/view/<?=$post['Post']["id"]?>">
                <img src="img/blog/1.jpg" alt="">
                <div class="date-blog">
                    <p class="date-number"><?= date('d', strtotime($post['Post']['created'])); ?></p>
                    <p class="date-month"><?= date('M', strtotime($post['Post']['created'])); ?></p>
                </div>
            </a>
        </div>
        <div class="single-blog-text">
            <h3><a class="blog-hd" href="/posts/view/<?=$post['Post']["id"]?>"><?= $post['Post']['title']; ?></a></h3>
            <div class="single-item-comment-view">
                <span><i class="fa fa-clock-o"></i><?= date('Y/m/d H:i:s', strtotime($post['Post']['created'])); ?></span>
            </div>
            <p style="text-overflow: ellipsis;overflow: hidden;width: 80%;height: 40px;white-space: nowrap;"><?= $post['Post']['body']; ?></p>
            <a class="readmore" href="/posts/view/<?=$post['Post']["id"]?>">Read More</a>
        </div>
    </div>
</div>
    <?php endforeach;?>
    <?php unset($post);?>

</div>

<br>
        <div class="row" style="text-align: center">
            <div class="pagination pagination-large text-center">
                <ul class="pagination">
                    <?php
                    echo $this->Paginator->prev(__('« 前一页'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                    echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                    echo $this->Paginator->next(__('后一页 »'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                    ?>
                </ul>
            </div>
        </div>
        <div class="row" style="text-align: center">
            <?php echo $this->Paginator->counter(); ?>
        </div>
        <br>
