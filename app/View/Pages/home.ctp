	<!--Slider Area Start-->

	<div class="slider-area">
		<div class="preview-2">
				
					<div id="nivoslider" class="slides" style="width:100vw;height:600px;">
						<?php foreach ($images as $image): ?>
						<img src="<?php print_r($image["BrwImage"]["main"]["url"])?>" alt="" title="#slider-1-caption1"/>
						<?php endforeach;?>
					</div>
					<?php foreach ($images as $image): ?>
					<div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
						<div class="banner-content slider-1">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="text-content-wrapper">
											<div class="text-content">
												<br/><br/><br/><br/>
												<div class="banner-readmore wow fadeInUp" data-wow-duration="3600ms" data-wow-delay=".6s">
													<a class="button-default" href="<?php print_r($image["Image"]["urlLink"])?>">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach;?>
		</div>
	</div>
	<!--End of Slider Area-->