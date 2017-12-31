<style>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
@import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');



.head{float:left;width:100%;}
.search-box{width:95%; margin:0 auto 40px;}
.listing-block{background:#fff; height:500px; padding-top:20px; overflow-y:auto;}
.media {background:#fff; position:relative; margin-bottom:15px;}
.media img{width:200px;margin:0; height:136px;}
.media-body{border:1px solid #bcbcbc; border-left:0; height:136px;}
.media .price{float:left; width:100%; font-size:30px;font-weight:600; color:#4765AB;}
.media .price small{display:block; font-size:17px; color:#232323;}
.media .stats{float:left; width:100%; margin-top:10px;}
.media .stats span{float:left; margin-right:10px; font-size:15px;}
.media .stats span i{margin-right:7px; color:#4765AB;}
.media .address{float:left; width:100%;font-size:14px; margin-top:5px; color:#888;}
.media .fav-box{position:absolute; right:10px; font-size:20px; top:4px; color:#E74C3C;}

</style>
<section class="head">
    <div class="container">
        <h2 class="text-center">History</h2>
    </div>
</section>
<div class="clearfix"></div>
<section class="search-box">
    <div class="container">
	<div class="row">
		<div class="col-md-12 listing-block">
        <?php foreach ($histories as $history): ?>
        <div class="media">
            <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
             </div>
              <img class="d-flex align-self-start" src=<?php echo $history['BrwImage']['main']['path']; ?> alt="Generic placeholder image">
              <div class="media-body pl-3">
                <div class="price">$<?php echo $history['History']['price']; ?><small><?php echo $history['History']['city']; ?></small></div>
                <div class="stats">
                    <span><i class="fa fa-arrows-alt"></i>1678 Sq ft</span>
                    <span><i class="fa fa-bath"></i>2 Beadrooms</span>
                </div>
                <div class="address"><?php echo $history['History']['address']; ?></div>
              </div>
            </div>
                <?php endforeach; ?>
    <?php unset($history); ?>
		</div>
	</div>
</div>
</section>
