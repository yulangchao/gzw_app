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

<!-- Start Apartment area -->
<div class="apartment-area pd-70">
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="property-heading">
                <h1>Video Links</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
    </div>
    <div class="row mg-b-30">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item">
            <div class="property-item dh-container res-mg-bt">
                <video id="video" width="360" height="260" src="movie.mp4" controls controlsList="nodownload">
                    your browser does not support the video tag
                </video>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item">
            <div class="property-item dh-container res-mg-bt">
                <img src="img/property/2.jpg" alt="" />
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item">
            <div class="property-item dh-container res-dis-none">
                <img src="img/property/3.jpg" alt="" />
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="custom-pagination">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a>
                    </li>
                    <li><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a>
                    </li>
                </ul>
            </div>
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