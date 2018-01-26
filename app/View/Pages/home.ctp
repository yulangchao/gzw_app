	<!--Slider Area Start-->

	<div class="slider-area">
		<div class="preview-2">
				
			<div id="nivoslider" class="slides" style="width:100vw;height:600px;">
				<?php foreach ($images as $image): ?>
				<a href="<?php print_r($image["Image"]["urlLink"])?>">
				<img src="<?php print_r($image["BrwImage"]["main"]["url"])?>" alt="" />
				</a>
				<?php endforeach;?>
			</div>
		
		</div>
	</div>
	<!--End of Slider Area-->