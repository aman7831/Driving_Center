<div class="content-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2><a href="./home">Home</a> <i class="fa fa-angle-double-right"></i> Free Estimate</h2>
			</div>
		</div>
	</div>
</div>
<div class="content-data">
	<div class="container">
		<div class="content-block">
			<div class="row">
				<div class="col-sm-12">
					<h2>Free Estimate</h2>
					<div class="sectiontitleunderline"></div>
				</div>
				<div class="col-sm-4">
					<div class="quoet-address">
						<ul class="clearfix">
							<li><span>Visit Us</span> <br/> <?php echo $address; ?></li>
							<li><span>Email Us</span> <br/> <a href="sms:<?php echo $email; ?>"><?php echo $email; ?></a></li>
							<li><span>Call Us</span> <br/> <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="form_section">
						<form class="form-horizontal" method="post" role="form" action="./quote-send"  enctype="multipart/form-data" style="color:#000" id="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<i class="fa fa-user"></i>
										<input type="text" name="fullName" class="form-control formstyle" id="fullName" placeholder="Your Name" required /><br>
									</div>
									<div class="col-sm-6">
										<i class="fa fa-paper-plane"></i>
										<input type="email" name="email" id="email" class="form-control formstyle" placeholder="Your Email" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" /><br>
									</div>
									<div class="col-sm-6">
										<i class="fa fa-phone"></i>
										<input type="tel" name="phone" id="phone" class="form-control formstyle" placeholder="Your Phone" required  pattern="^([0-9]{3})?([ ]{1})?([0-9]{3})?([ ]{1})?([0-9]{4})$" minlength="10" maxlength="12" /><br>
									</div>
									<div class="col-sm-6">
										<i class="fa fa-map-marker"></i>
										<input type="text" name="address" class="form-control formstyle" placeholder="Your Address" required /><br>
									</div>
									<div class="col-sm-12">
										<i class="fa fa-envelope sms"></i>
										<textarea name="message" class="form-control formstyle" rows="8" placeholder="Job Details" required ></textarea><br>
									</div>
									<div class="col-sm-6">
										<button type="submit" id="btn-sub" class="btn-formstyle">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>