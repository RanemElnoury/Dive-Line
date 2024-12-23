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
    
    align-items: center; /* محاذاة العناصر رأسياً */
    padding: 10px 20px; /* إضافة بعض المسافة داخل الهيدر */
    flex-wrap: nowrap; /* يمنع العناصر من التدوير عند تصغير الشاشة */
}

.logo {
    height: auto; /* الحفاظ على النسبة الأصلية للصورة */
    max-height: 110px;
    margin-right: 10px; /* تقليل المسافة بين الصورة والعناصر الأخرى */
    margin-left: -50px; /* تقريب الصورة إلى اليسار */
}

.search-form {
    display: flex; /* استخدام flex لتوزيع العناصر */
    align-items: center; /* محاذاة العناصر في المنتصف عمودياً */
    margin-right: 20px; /* مسافة بين حقل البحث والعناصر الأخرى */
}

.search-form input[type="text"] {
    padding: 8px; /* إضافة بعض المساحة داخل حقل الإدخال */
    border: 1px solid #ccc; /* لون الحدود */
    border-radius: 4px; /* زوايا دائرية */
    width: 150px; /* عرض حقل الإدخال */
}

.search-form button {
    background-color: #47b2e4; /* لون خلفية الزر */
    border: none; /* إزالة الحدود */
    color: white; /* لون النص */
    padding: 8px 12px; /* مساحة داخل الزر */
    border-radius: 4px; /* زوايا دائرية */
    cursor: pointer; /* تغيير شكل المؤشر عند التحويم */
    margin-left: 5px; /* مسافة بين حقل الإدخال والزر */
}

/* تعديل مظهر القائمة */
.navmenu {
    flex-grow: 1; /* تتيح للقائمة أن تأخذ المساحة المتاحة */
    text-align: center; /* توسيط العناصر عند تصغير الشاشة */
}

.navmenu ul {
    display: flex; /* استخدام flex لتوزيع العناصر في القائمة */
    justify-content: center; /* توسيط العناصر */
    flex-wrap: wrap; /* للسماح بتدوير العناصر عند تصغير الشاشة */
}

.navmenu ul li {
    padding: 10px; /* بعض المساحة بين العناصر */
}

/* Media Queries for mobile */
@media (max-width: 768px) {
    header {
        flex-direction: column; /* تغيير اتجاه العناصر إلى عمودي في الشاشات الصغيرة */
        align-items: center; /* توسيط العناصر في القائمة */
    }

    .navmenu ul {
        flex-direction: column; /* تغيير ترتيب العناصر عمودياً */
        align-items: center; /* توسيط العناصر في القائمة */
    }

    .logo {
        margin: 0 auto; /* توسيط الشعار */
        max-height: 80px; /* تقليل ارتفاع الشعار في الشاشات الصغيرة */
    }

    .btn-getstarted {
        margin-top: 10px; /* إضافة بعض المساحة فوق الزر */
    }
}

@media (max-width: 576px) {
    header {
        padding: 10px; /* تقليل الحشو في الهيدر */
    }
}



.success-message {
    color: green;
    font-weight: bold;
}

.error-message {
    color: red;
    font-weight: bold;
}

.menu-item {
    width: 400px; /* عرض ثابت للمنتج */
    height: 450px; /* ارتفاع ثابت للمنتج */
    text-align: center; /* توسيط النص والصورة */
    padding: 10px;
    margin: 10px auto;
}

.menu-item img {
    width: 250px;  /* عرض الصورة لتتناسب مع عرض العنصر */
    height: 200px; /* ارتفاع ثابت للصورة */
    object-fit: fill; /* تجعل الصورة تناسب المساحة المحددة وتقص الأجزاء الزائدة */
    border-radius: 5px;
}

.menu-item h4 {
    font-size: 18px;
    margin-top: 10px;
}

.menu-item .price {
    font-size: 16px;
    color: #333;
}

/* Media Queries for mobile */
@media (max-width: 768px) {
    .menu-item {
        text-align: center;
        margin: 0 auto;
    }
}

@media (max-width: 576px) {
    .menu-item img {
        max-width: 100%; /* تعديل عرض الصورة ليغطي الشاشة الصغيرة بشكل أفضل */
    }
}

/* New CSS for scrollable Prands dropdown */
.scrollable-dropdown {
    max-height: 300px; /* Limit the height to enable scrolling */
    overflow-y: auto; /* Allow vertical scrolling */
}

.scrollable-dropdown img.small-image {
    width: 60px; /* Adjust image size */
    height: auto;
    margin-left: 10px;
}

.navmenu ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.navmenu ul li {
    padding: 10px;
}

.navmenu ul li a {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.navmenu ul li img {
    margin-left: 10px;
}

.image-container img {
    width: 400px;  /* عرض ثابت للصورة */
    height: 300px; /* طول ثابت للصورة */
    object-fit: fill; /* يمدد الصورة لتغطية الأبعاد المحددة */
    display: block;
    margin: 0 auto; /* لجعل الصورة في المنتصف */
    border-radius: 20px;
}

/* لتوسيط الرابط بالكامل داخل الـ div */
.content {
    display: flex;
    justify-content: center; /* يضمن أن العنصر في منتصف العرض */
    align-items: center; /* يضمن أن العنصر في منتصف الارتفاع */
    flex-direction: column; /* يجعل العناصر داخل div (مثل النص والصورة) عمودية */
    text-align: center; /* يضمن أن النص في منتصف الرابط */
    height: 100%; /* يضمن توزيع المحتويات بشكل صحيح */
}

/* تنسيق الرابط */
.read-more {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px; /* يمكنك تعديل الحجم حسب الحاجة */
    font-weight: bold;
    margin-top: 10px;
    text-align: center;
}

/* التأكد من أن الأيقونة تظهر بجانب النص */
.read-more i {
    margin-left: 5px;
}
    </style>


</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top" style="background-color: rgba(40, 58, 90, 0.9);">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <img src="main.png" class="logo" alt="Logo">
        <form class="search-form" onsubmit="openModal(event)">
            <input type="text" name="query" placeholder="Search..." required>
            <button type="submit"><i class="bi bi-search"></i></button>
        </form>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.php#home" class="active">Home</a></li>
                <li class="dropdown">
                    <a href="index.php#books"><span>Maps & Books</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="maps.php">Maps</a></li>
                        <li><a href="books.php">Books</a></li>
                    </ul>
                </li>
                <li><a href="index.php#Product">Products</a></li>
                <li><a href="index.php#services">Services</a></li>
                <li><a href="index.php#team">Team</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#Prands"><span>Prands</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul class="scrollable-dropdown">
                        <?php
                        include 'db.php'; 

                        $sql = "SELECT id, name, img FROM prands";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $brandId = $row['id']; 
                                $brandName = $row['name'];
                                $brandImage = $row['img'];
                                
                                echo '<li class="dropdown">';
                                echo '    <a href="categories.php?prand_id=' . $brandId . '" id="brand-link">'; 
                                echo '        <span>' . htmlspecialchars($brandName) . '</span>';
                                echo '        <img src="uploads/' . htmlspecialchars($brandImage) . '" class="small-image" alt="' . htmlspecialchars($brandName) . '">';
                                echo '    </a>';
                                echo '</li>';
                            }
                        } else {
                            // No brands found
                        }

                        $conn->close();
                        ?>
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="btn-getstarted" href="admin_login.php">Admin</a>
    </div>
</header>

    
<!-- Search Results Modal -->
<div id="searchModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-ms" role="document" style="max-height: 300px;"> <!-- تصغير الارتفاع -->
        <div class="modal-content" style="font-size: 0.85em;"> <!-- تصغير حجم النص -->
            <div class="modal-header">
                <h5 class="modal-title">Search Results</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody" style="overflow-y: auto;"> <!-- إضافة scroll عند الحاجة -->
                <!-- Content will be populated here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- jQuery and Bootstrap JS (Ensure these are included) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('.search-form').on('submit', openModal); // إعادة تعيين الحدث عند تحميل الصفحة

        $('.close, .btn-primary').on('click', function() {
            $('#searchModal').modal('hide'); // Close the modal manually
        });
    });

    function openModal(event) {
        event.preventDefault(); // Prevent page reload
        const query = event.target.query.value; // Get search value

        console.log('Search query:', query); // سجل استعلام البحث

        // Make AJAX request to search.php
        $.ajax({
            url: 'search.php',
            type: 'GET',
            data: { query: query },
            success: function(response) {
                console.log('Response received:', response); // سجل الاستجابة
                $('#modalBody').empty(); // تنظيف المحتوى السابق
                if (response) {
                    $('#modalBody').html(response); // Populate modal body with results
                    $('#searchModal').modal('show'); // Show modal
                } else {
                    $('#modalBody').html('<p>لا توجد نتائج.</p>'); // Show no results message
                    $('#searchModal').modal('show'); // Show modal
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error fetching data:', textStatus, errorThrown); // سجل الخطأ
                $('#modalBody').html('<p>حدث خطأ أثناء تحميل النتائج.</p>'); // Show error message
                $('#searchModal').modal('show'); // Show modal
            }
        });
    }
</script>

    <main class="main">
    
        <section id="books" class="products section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
        </div>
        <div class="row gy-4">
        <h2 style="font-weight: bold; text-align: center; display: block; margin-top: 6%;">Books</h2>
   

   <?php
include 'db.php'; 




    $sql_products = "SELECT name, img, price FROM books ";
    $result_products = $conn->query($sql_products);

    if ($result_products && $result_products->num_rows > 0) {
        $products = [];
        while ($row = $result_products->fetch_assoc()) {
            $products[] = $row;
        }

        $totalProducts = count($products); // عدد المنتجات
        $visibleProductsCount = min(3, $totalProducts); // عرض 3 منتجات كحد أقصى
      
        // عرض أول 3 منتجات
        for ($i = 0; $i < $visibleProductsCount; $i++) {
            $row = $products[$i];
            echo '<div class="col-lg-4 menu-item zoom-effect">';
            echo '   <br><br><a href="uploads/' . htmlspecialchars($row['img']) . '" class="glightbox">';
            echo '        <img src="uploads/' . htmlspecialchars($row['img']) . '" class="menu-img img-fluid" alt="">';
            echo '    </a>';
            echo '    <h4>' . htmlspecialchars($row['name']) . '</h4>';
            echo '    <p class="price">$' . htmlspecialchars(number_format($row['price'], 2)) . '</p>';
            echo '    <p class="ingredients">';
            echo '      <a class="btn-getstarted whatsapp-order" href="#" data-product-name="' . htmlspecialchars($row['name']) . '" data-product-price="' . htmlspecialchars(number_format($row['price'], 2)) . '">Order Now</a>';
            echo '    </p>';
            echo '</div>';
        }

        // عرض المنتجات المخفية
        for ($i = 3; $i < $totalProducts; $i++) {
            $row = $products[$i];
            echo '<div class="col-lg-4 menu-item zoom-effect d-none">'; // أضف d-none لجعلها مخفية
            echo '   <br><br><a href="uploads/' . htmlspecialchars($row['img']) . '" class="glightbox">';
            echo '        <img src="uploads/' . htmlspecialchars($row['img']) . '" class="menu-img img-fluid" alt="">';
            echo '    </a>';
            echo '    <h4>' . htmlspecialchars($row['name']) . '</h4>';
            echo '    <p class="price">$' . htmlspecialchars(number_format($row['price'], 2)) . '</p>';
            echo '    <p class="ingredients">';
            echo '      <a class="btn-getstarted whatsapp-order" href="#" data-product-name="' . htmlspecialchars($row['name']) . '" data-product-price="' . htmlspecialchars(number_format($row['price'], 2)) . '">Order Now</a>';
            echo '    </p>';
            echo '</div>';
        }

        // زر "See More" إذا كان هناك المزيد من المنتجات
        if ($totalProducts > 3) {
            echo '<div class="col-12 text-center see-more">';
            echo '    <button id="seeMoreBtn" type="button" class="btn btn-primary">See More</button>';
            echo '</div>';
        }
} else {
    echo "<p>No products found</p>";
}

$conn->close();
?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const seeMoreBtn = document.getElementById('seeMoreBtn');

    // Function to show all hidden products when clicking "See More"
    function showAllProducts() {
        const hiddenProducts = document.querySelectorAll('.menu-item.zoom-effect.d-none'); // العناصر المخفية
        hiddenProducts.forEach(function(product) {
            product.classList.remove('d-none'); // إزالة الدالة لإظهار المنتجات
        });

        seeMoreBtn.style.display = "none"; // إخفاء زر "See More" بعد العرض
    }

    // إظهار زر "See More" إذا كان هناك منتجات مخفية
    if (document.querySelectorAll('.menu-item.zoom-effect.d-none').length > 0) {
        seeMoreBtn.style.display = "block";
    }

    seeMoreBtn.addEventListener("click", showAllProducts);
});
</script>



    </div>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.whatsapp-order').on('click', function(e) {
        e.preventDefault(); // منع الانتقال الفوري

        // الحصول على تفاصيل المنتج من المعرفات (data-*)
        var productName = $(this).data('product-name');
        var productPrice = $(this).data('product-price');

        // تكوين نص الرسالة
        var message = "Hello, I would like to order the product: " + productName + " for $" + productPrice;

        // تكوين رابط واتساب مع الرسالة
        var whatsappUrl = "https://wa.me/201118324965?text=" + encodeURIComponent(message);

        // فتح واتساب في نافذة جديدة
        window.open(whatsappUrl, '_blank');
    });
});
</script>
</section>

    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename"><img  src="main.png" class="logo" alt="Logo"></span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Egypt </p>
                        <p>Sharm El-Sheikh , Al Malak Hamad Ibn Al Khalifa Street</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+01007061157</span></p>
                        <p><strong>Email:</strong> <span>info@diveline.shop</span></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12" style="margin-top: 10%;">
                    <h4>Follow Us</h4>
                    <p>our social media links</p>
                    <div class="social-links d-flex">
                        <a href="https://www.facebook.com/profile.php?id=100054567784003&mibextid=JRoKGi"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/diveline_store?igsh=MXVrMDd3YzE1dDg3"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12" style="margin-top: 10%;">
                    <h4>website developed by</h4>
                    <p>eng. yahya mostafa</p>
                    <div class="social-links d-flex">
                        <a href="https://www.facebook.com/yahya.elshepeny?mibextid=JRoKGi"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/el__trend?igsh=MTFtMDFnM2dpNXp3bQ%3D%3D&utm_source=qr"><i class="bi bi-instagram"></i></a>
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