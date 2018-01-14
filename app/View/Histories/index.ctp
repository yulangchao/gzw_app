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
<section class="head" style="padding-top:50px;">
    <div class="container">
        <h2 class="text-center">Sold Histories</h2>
        <br/>
    </div>
</section>
<div class="clearfix"></div>
<section class="search-box">
    <div class="container">
	<div class="row">
        <div id="map" style="height:500px;margin-right:5%;margin-left:5%;"></div>
	</div>
</div>
</section>

<script>
    function initMap() {
        var victoria = {lat: 48.42212, lng: -123.367339};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: victoria
        });

        var geocoder = new google.maps.Geocoder();

        geocodeAddress(geocoder, map);


        function geocodeAddress(geocoder, resultsMap) {

            <?php foreach ($histories as $history): ?>
               
                var address ="<?=$history['History']['address']?>";
                console.log(address);
                var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h1 id="firstHeading" class="firstHeading"><?=$history['History']['title']?></h1>'+
                '<div id="bodyContent">'+
                '<p><?=$history['History']['body']?></p>'+
                '<br/>'+
                '<p>price: $<?=$history['History']['price']?></p>'+
                '</div>'+
                '</div>';

                var infowindow = new google.maps.InfoWindow({
                content: contentString
                });

                geocoder.geocode({'address': address}, function(results, status) {
                if (status === 'OK') {
                    resultsMap.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location
                    });

                    marker.addListener('click', function() {
                infowindow.open(map, marker);
                });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
                });
            <?php endforeach;?>
		    <?php unset($history);?>
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqj9Ub3HNAVt38O90gFgXZHi03rqYd4fg&callback=initMap"
async defer></script>
