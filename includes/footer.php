		<!-- Footer Section -->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copyright wow zoomIn">
							<p>Copyright © <?php echo date('Y'); ?> - Driving Center. All Rights Reserved. <span>Designed By: <a href="" target="_blank"> Aman Bhandari</a></span></p>
						</div>
					</div>					
				</div>
			</div>
		</div>
		
		<!-- Go to Top Start --> 
	    <div id="back-top" style="">
			<a href="#top"><span><i class="fa fa-angle-double-up" aria-hidden="true"></i></span></a>
		</div>		
	</div><!-- Wrapper Close -->

	<!-- JS Files -->
	<script src="js/jquery-2.2.2.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="fancybox/jquery.fancybox.js"></script>		
	<script src="js/unitegallery.min.js"></script>
	<script src="js/ug-theme-tilesgrid.js"></script>
	<script src="js/owl.carousel.min.js"></script>		
	<script src="js/lightbox.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/html5lightbox.js"></script>
	<script src="js/jquery.mixitup.js"></script>
	<script src="js/jquery.scrollUp.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
    
</body>
</html>