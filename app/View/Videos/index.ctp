
<!-- Start Apartment area -->
<div class="apartment-area pd-70">
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="property-heading">
                <h1>Leo 带你去看房</h1>
            </div>
        </div>
    </div>
    <div class="row mg-b-30">
    <?php foreach ($videos as $video): ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item">
            <div class="property-item dh-container res-mg-bt">
                <video id="video" width="360" height="260" src="<?=$video['BrwFile']['main']['url']?>" controls controlsList="nodownload">
                    your browser does not support the video tag
                </video>
                <br/><br/>
                <p style="text-align:  center;font-weight:  bold;"><?=$video['Video']['title']?></p>
            </div>
        </div>
        <?php endforeach;?>
					<?php unset($video);?>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
        <br>
        <div class="row" style="text-align: center">
            <div class="pagination pagination-large text-center">
                <ul class="pagination">
                    <?php
echo $this->Paginator->prev(__('« 前一页'), array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1));
echo $this->Paginator->next(__('后一页 »'), array('tag' => 'li', 'currentClass' => 'disabled'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
?>
                </ul>
            </div>
        </div>
        <div class="row" style="text-align: center">
            <?php echo $this->Paginator->counter(); ?>
        </div>
        <br>
        </div>
    </div>
</div>
</div>

<script>
$('#video').click(function(){
   document.getElementById('video').play();
});
</script>
<!-- End Apartment area -->