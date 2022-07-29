<div class="content-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2><a href="./home">Home</a> <i class="fa fa-angle-double-right"></i> Gallery</h2>
			</div>
		</div>
	</div>
</div>
<div class="content-data">
	<div class="container">
		<div class="content-block">
			<div class="row">
				<div class="col-sm-12">
					<h2>Our Gallery</h2>
					<div class="sectiontitleunderline"></div>
					<div id="gallery" style="display:none;">

						<?php for($i=1; $i<=9; $i++) { ?>
							<a href="#">
								<img alt="Gallery Image : American Paving."
								src="images/gallery/gallery-image<?php echo $i;?>.jpg"
								data-image="images/gallery/gallery-image<?php echo $i;?>.jpg"
								data-description=""
								style="display:none">
							</a>
						<?php } ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>