<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Index - Arsha Bootstrap Template</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Popup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Main CSS File -->
	<link href="assets/css/main.css" rel="stylesheet">
	<style >
				header {
    display: flex;
    justify-content: space-between; /* لضمان توزيع العناصر */
    align-items: center; /* محاذاة العناصر رأسياً */
    padding: 10px 20px; /* إضافة بعض المسافة داخل الهيدر */
}

.logo {
    height: auto; /* للحفاظ على النسبة الأصلية للصورة */
    max-height: 80px; /* تحديد الحد الأقصى للارتفاع */
    margin-right: 29.5%; /* مسافة بين الصورة والعناصر الأخرى */
}
.navmenu {
    flex-grow: 1; /* السماح لشريط التنقل بالتوسع ليشغل المساحة المتبقية */
}
		.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: var(--bs-nav-tabs-link-active-color);
    background-color: #a2a2a2c9;
    border-color: #100e0e69;
}
.nav-tabs {
    --bs-nav-tabs-link-hover-border-color:  #100e0e69;
    color: blue;
    border-bottom: var(--bs-nav-tabs-border-width) solid #100e0e69;
}
.nav-item a:hover h4 {
  color: #6f9eb4; /* اللون عند الوقوف على العنصر */
  transition: color 0.3s ease; /* تأثير الانتقال لجعل التغيير سلس */
}
.nav-link {
  display: flex;               /* استخدام flexbox لوضع العناصر بجانب بعضها */
  align-items: center;         /* محاذاة الصورة والنص في الوسط */
}

.dropdown a {
  display: flex;               /* يجعل النص والصورة جنبًا إلى جنب */
  align-items: center;          /* لضبط الصورة والنص في نفس المستوى العمودي */
          /* مسافة بين العناصر */
  text-decoration: none;        /* إزالة التسطير من الروابط */
}

.small-image {
  width: 60px;                 /* عرض الصورة */
  height: 30px;                /* ارتفاع الصورة */
  margin-left: 10px;           /* مسافة بين النص والصورة */
}

.navmenu ul {
  list-style: none;            /* إزالة النقاط من القائمة */
  padding: 0;                  /* إزالة المسافات الافتراضية */
  margin: 0;
}

.navmenu .dropdown {
  display: block;              /* لضمان أن كل عنصر يكون تحت الآخر */
  width: 100%;                 /* ملء عرض العنصر بالكامل */
}

a:hover {
  color: #47b2e4;              /* تغيير لون النص عند التحويم */
}

	</style>


</head>

<body class="index-page">

	<header id="header" class="header d-flex align-items-center fixed-top" style="background-color: rgba(40, 58, 90, 0.9);;">
		<div class="container-fluid container-xl position-relative d-flex align-items-center">
					
<img src="main.png" class="logo" alt="Logo">
		<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="index.php #hero" class="active">Home</a></li>
        <li><a href="index.php #about">About</a></li>
        <li><a href="index.php #Product">Products</a></li>
        <li><a href="index.php #services">Services</a></li>
        <li><a href="index.php #team">Team</a></li>
        <li><a href="index.php #contact">Contact</a></li>
        <li class="dropdown">
            <a href="#Prands"><span>Prands</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                 <li class="dropdown">
                            <a href="TUSA.php" id="tusa-link">
                                <span>TUSA</span>
                                <img src="assets2/img/1.jpg" class="small-image" alt="">
                                <i class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="APEKS.php" id="tusa-link">
                                <span>APEKS</span>
                                <img src="assets2/img/2.jpg" class="small-image" alt="">
                                <i class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="AQUALUANG.php" id="tusa-link">
                                <span>AQUALUANG</span>
                                <img src="assets2/img/3.png" class="small-image" alt="">
                                <i class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="WATERPROOF.php" id="tusa-link">
                                <span>WATERPROOF</span>
                                <img src="assets2/img/1.png" class="small-image" alt="">
                                <i class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="MARES.php" id="tusa-link">
                                <span>MARES</span>
                                <img src="assets2/img/5.jpg" class="small-image" alt="">
                                <i class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>
                        </li>
            </ul>
        </li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

			<a class="btn-getstarted" href="#about">Login as Admin</a>

		</div>
	</header>

	<main class="main">
	
		<section id="Prands" class="menu section" style="background-color: #d2d2d2;" >

			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<br><br><br>
				<h2>TUSA Glasses</h2>
				<p><span>Check Our</span> <span class="description-title">Perfect Glasses</span></p>
			</div><!-- End Section Title -->

			<div class="container">

				<div class="tab-content" data-aos="fade-up" data-aos-delay="200">

					<div class="tab-pane fade active show" id="menu-starters">

						<div class="tab-header text-center">
							<p></p>
							
							<br>
						</div>

						<div class="row gy-5">

						 <div class="col-lg-4 menu-item zoom-effect">
								<a href="assets2/img/menu/21.png" class="glightbox">
										<img src="assets2/img/menu/21.png" class="menu-img img-fluid" alt="">
									</a>
									<h4>Full suite</h4>
									<p class="price">
										$5.95
									</p>
									<p class="ingredients">
										<a class="btn-getstarted" href="#about">Order Now</a>
									</p>
								</div><!-- Menu Item -->


							<div class="col-lg-4 menu-item zoom-effect">
								<a href="assets2/img/menu/22.png" class="glightbox"><img src="assets2/img/menu/22.png" class="menu-img img-fluid" alt=""></a>
								<h4>Seac Warm Dry Suit, Women's</h4>
								<p class="price">
									$14.95
								</p>
								<p class="ingredients">
									<a class="btn-getstarted" href="#about">Order Now</a>
								</p>
							</div><!-- Menu Item -->

							<div class="col-lg-4 menu-item zoom-effect">
								<a href="assets2/img/menu/23.png" class="glightbox"><img src="assets2/img/menu/23.png" class="menu-img img-fluid" alt=""></a>
								<h4>Waterproof 1.5mm G2 5 Finger Gloves</h4>
								<p class="price">
									$8.95
								</p>
								<p class="ingredients">
									<a class="btn-getstarted" href="#about">Order Now</a>
								</p>
							</div><!-- Menu Item -->

							<div class="col-lg-4 menu-item zoom-effect">
								<a href="assets2/img/12.png" class="glightbox"><img src="assets2/img/12.png" class="menu-img img-fluid" alt=""></a>
								<h4>Waterproof W7 Neoprene Neck Seal</h4>
								<p class="price">
									$12.95
								</p>
								<p class="ingredients">
									<a class="btn-getstarted" href="#about">Order Now</a>
								</p>
							</div><!-- Menu Item -->

							<div class="col-lg-4 menu-item zoom-effect">
								<a href="assets2/img/menu/22.png" class="glightbox"><img src="assets2/img/menu/22.png" class="menu-img img-fluid" alt=""></a>
								<h4>Scubapro 5mm Delta Boots</h4>
								<p class="price">
									$12.95
								</p>
								<p class="ingredients">
									<a class="btn-getstarted" href="#about">Order Now</a>
								</p>
							</div><!-- Menu Item -->

							<div class="col-lg-4 menu-item zoom-effect">
								<a href="assets2/img/menu/23.png" class="glightbox"><img src="assets2/img/menu/23.png" class="menu-img img-fluid" alt=""></a>
								<h4>Aqualung 3mm Hydroflex Men's</h4>
								<p class="price">
									$9.95
								</p>
								<p class="ingredients">
									<a class="btn-getstarted" href="#about">Order Now</a>
								</p>
							</div><!-- Menu Item -->

						</div>
					</div><!-- End Starter Menu Content -->

					
						</div>
					</div><!-- End Lunch Menu Content -->

					
				</div>

			</div>

		</section><!-- /Menu Section -->

	</main>

	<footer id="footer" class="footer">
		<div class="container footer-top">
			<div class="row gy-4">
				<div class="col-lg-4 col-md-6 footer-about">
					<a href="index.html" class="d-flex align-items-center">
						<span class="sitename"><img src="main.png" class="logo" alt="Logo"></span>
					</a>
					<div class="footer-contact pt-3">
						<p>A108 Adam Street</p>
						<p>New York, NY 535022</p>
						<p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
						<p><strong>Email:</strong> <span>info@example.com</span></p>
					</div>
				</div>

				<div class="col-lg-2 col-md-3 footer-links">
					<h4>Useful Links</h4>
					<ul>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
					</ul>
				</div>

				<div class="col-lg-2 col-md-3 footer-links">
					<h4>Our Services</h4>
					<ul>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
					</ul>
				</div>

				<div class="col-lg-4 col-md-12">
					<h4>Follow Us</h4>
					<p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
					<div class="social-links d-flex">
						<a href=""><i class="bi bi-twitter-x"></i></a>
						<a href=""><i class="bi bi-facebook"></i></a>
						<a href=""><i class="bi bi-instagram"></i></a>
						<a href=""><i class="bi bi-linkedin"></i></a>
					</div>
				</div>

			</div>
		</div>

	</footer>

	<!-- Scroll Top -->
	<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Preloader -->
	<div id="preloader"></div>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

	<!-- Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>