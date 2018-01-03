
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--Header Start-->
		<div class="as-mainwrapper">

			<!-- Contact Start -->
			<div class="signup-area pd-70">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="wishlist-list">
										<table>
											<thead>
												<tr>
													<th>#</th>
													<th>Properties</th>
													<th>Date Added</th>
													<th>Views</th>
												</tr>
											</thead>
											<tbody>
                                            <?php foreach ($fangs as $fang): ?>
												<tr>
													<td><?=$fang['Fang']["id"]?></td>
													<td>
													<div class="wishlist-img">
														<a href="#"><img style="width:118px; height:144px;" src="<?php echo $fang['BrwImage']['main'] ? $fang['BrwImage']['main']['url'] : '/img/wishlist/3.jpg'; ?>" alt="no pic" /></a>
													</div>
													<div class="wishlist-pro-details">
														<h1><a id="<?=$fang['Fang']["id"]?>" class="links" href="<?=$fang['Fang']["link"]?>"><?=$fang['Fang']["address"]?></a></h1>
														<p>Status: <?=$fang['Fang']["status"]?></p>
														<p>Area: <?=$fang['Fang']["area"]?> m2</p>
														<p>Beds: <?=$fang['Fang']["beds"]?></p>
														<p>Baths: <?=$fang['Fang']["baths"]?></p>
													</div>
													</td>
													<td><?=date('m/d/Y', strtotime($fang['Fang']['created']));?></td>
													<td><?=$fang['Fang']["views"]?></td>
                                                </tr>
                                                <?php endforeach;?>
                                                <?php unset($fang);?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="row mg-t-30">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
				</div>
			</div>
			<!-- Contact End -->
		</div>
		<!--Footer end -->

</body>

<script>

$('document').ready(function(){

    $('.links').click(function(){
        $.ajax({
            url: "/fangs/click/"+$(this).attr('id'),
            type: "POST",
            success: function (data) {
                console.log('done');
            }
        })
    });


})


</script>
