<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
	<!--- basic page needs
================================================== -->
	<meta charset="utf-8">
	<title>Kards</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- mobile specific metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/vendor.css">
	<!-- script
	================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>
	<!-- favicons
		================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
</head>

<body id="top">
	<!-- header 
================================================== -->
	<?php
	include("menu.php");
	?>
	<section id="portfolio">
		<div class="row section-intro">
			<div class="col-twelve">
				<h5>Prestasi</h5>
				<h1>Lihat beberapa sertifikat saya</h1>
				<p class="lead">Hello, Ini adalah beberapa setifikat yang dapatkan dari hasil mengikuti kursusus online dari Dicoding.</p>
			</div>
		</div> <!-- /section-intro-->
		<div class="row portfolio-content">
			<div class="col-twelve">
				<!-- portfolio-wrapper -->
				<div id="folio-wrapper" class="block-1-2 block-mob-full stack">
					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="images/serifikat1.png" alt="AWS">
							<a href="#modal-01" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Cloud Practitioner Essential</h3>
										<span class="folio-types">
											Amazon Web Service
										</span>
									</div>
								</div>
							</a>
						</div>
					</div> <!-- /folio-item -->
					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="images/serifikat3.png" alt="Shutterbug">
							<a href="#modal-02" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Architecting on AWS</h3>
										<span class="folio-types">
											Amazon Web Service
										</span>
									</div>
								</div>
							</a>
						</div>
					</div> <!-- /folio-item -->
					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="images/serifikat2.png" alt="Clouds">
							<a href="#modal-03" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Visualisasi Data</h3>
										<span class="folio-types">
											Machine Learning
										</span>
									</div>
								</div>
							</a>
						</div>
					</div> <!-- /folio-item -->
					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="images/serifikat4.png" alt="Beetle">
							<a href="#modal-04" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Pemrograman Python</h3>
										<span class="folio-types">
											Machine Learning
										</span>
									</div>
								</div>
							</a>
						</div>
					</div> <!-- /folio-item -->
					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="images/serifikat5.png" alt="Lighthouse">
							<a href="#modal-05" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Machine Learning Pemula</h3>
										<span class="folio-types">
											Machine Learning
										</span>
									</div>
								</div>
							</a>
						</div>
					</div> <!-- /folio-item -->
					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="images/serifikat6.png" alt="Salad">
							<a href="#modal-06" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Pemrograman Kotlin</h3>
										<span class="folio-types">
											Android
										</span>
									</div>
								</div>
							</a>
						</div>
					</div> <!-- /folio-item -->
				</div> <!-- /portfolio-wrapper -->
			</div> <!-- /twelve -->
		</div> <!-- /portfolio-content -->
	</section>

	<?php
	include("footer.php");
	?>
	<!-- Java Script
	================================================== -->
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>

</html>