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
    max-height: 120px;
    margin-right: 29.5%; /* مسافة بين الصورة والعناصر الأخرى */
}
 

.navmenu {
    flex-grow: 1; 
    display: flex; /* استخدام flexbox */
    justify-content: flex-end; /* جعل العناصر تنحصر إلى اليمين */
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: var(--bs-nav-tabs-link-active-color);
    background-color: #a2a2a2c9;
    border-color: #100e0e69;
}

.nav-tabs {
    --bs-nav-tabs-link-hover-border-color: #100e0e69;
    color: blue;
    border-bottom: var(--bs-nav-tabs-border-width) solid #100e0e69;
}

.nav-item a:hover h4 {
    color: #6f9eb4; /* اللون عند الوقوف على العنصر */
    transition: color 0.3s ease; /* تأثير الانتقال لجعل التغيير سلس */
}

.nav-link {
    display: flex; /* استخدام flexbox لوضع العناصر بجانب بعضها */
    align-items: center; /* محاذاة الصورة والنص في الوسط */
}

.dropdown a {
    display: flex; /* يجعل النص والصورة جنبًا إلى جنب */
    align-items: center; /* لضبط الصورة والنص في نفس المستوى العمودي */
    text-decoration: none; /* إزالة التسطير من الروابط */
}

.small-image {
    width: 60px; /* عرض الصورة */
    height: 30px; /* ارتفاع الصورة */
    margin-left: 10px; /* مسافة بين النص والصورة */
}

.navmenu ul {
    list-style: none; /* إزالة النقاط من القائمة */
    padding: 0; /* إزالة المسافات الافتراضية */
    margin: 0;
}

.navmenu .dropdown {
    display: block; /* لضمان أن كل عنصر يكون تحت الآخر */
    width: 100%; /* ملء عرض العنصر بالكامل */
}

a:hover {
    color: #47b2e4; /* تغيير لون النص عند التحويم */
}

.popup-form {
    display: none;
    position: fixed;
    top: 40%;
    left: 65%;
    transform: translate(-50%, -50%);
    width: 500px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    z-index: 1000;
    padding: 20px;
    border-radius: 8px;
}

.popup-content {
    position: relative;
}

.close-btn {
    position: absolute;
    top: 8px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
}

.tusa-container {
    display: grid;
    grid-template-columns: repeat(2, 3fr); /* عمودين متساويين */
    gap: 10px; /* مسافة بين العناصر */
}

.TUSA {
    padding: 30px;
    border-radius: 5px;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.3s;
    margin: 3%;
    font-weight: bold;
}

.TUSA:hover {
    background-color: #e0e0e0;
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
 .success-message {
        color: green;
        font-weight: bold;
    }
    .error-message {
        color: red;
        font-weight: bold;
    }

    </style>


</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: rgba(40, 58, 90, 0.9);;">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
                    
<img src="main.png" class="logo" alt="Logo">

        <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="dashboard.php" class="active">Home</a></li>
            <li><a href="#maps">Maps</a></li>
        <li><a href="books_admin.php#books">Books</a></li>
            <li><a href="admin_index.php">General products</a></li>
        <li class="dropdown">
           <a href="#Prands"><span>Prands</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
   <ul class="scrollable-dropdown"> <!-- Add a class to make it scrollable -->
                <?php
    include 'db.php'; 

    $sql = "SELECT id, name, img FROM prands";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $brandId = $row['id']; 
            $brandName = $row['name'];
            $brandImage = $row['img'];
            
            echo '<li class="dropdown">';
            echo '    <a href="admin_categories.php?prand_id=' . $brandId . '" id="brand-link">'; 
            echo '        <span>' . $brandName . '</span>';
            echo '        <img src="uploads/' . $brandImage . '" class="small-image" alt="' . $brandName . '">';
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

            <a class="btn-getstarted" href="index.php" >Logout</a>

        </div>
    </header>

    <main class="main">
    
        <section id="maps" class="products section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
        </div>
        <div class="row gy-4">
        <h2 style="font-weight: bold; text-align: center; display: block; margin-top: 10%;">Maps</h2>
   <?php
include 'db.php'; 




    $sql_products = "SELECT id, name, img, price FROM maps";
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
            echo '<div class="col-lg-4 menu-item ">';
            echo '   <br><br><a href="uploads/' . htmlspecialchars($row['img']) . '" class="glightbox">';
            echo '        <img src="uploads/' . htmlspecialchars($row['img']) . '" class="menu-img img-fluid" alt="">';
            echo '    </a>';
            echo '    <h4>' . htmlspecialchars($row['name']) . '</h4>';
            echo '    <p class="price">$' . htmlspecialchars(number_format($row['price'], 2)) . '</p>';
            echo '    <p class="ingredients">';
            echo '      <a class="btn-getstarted whatsapp-order" href="#" data-product-name="' . htmlspecialchars($row['name']) . '" data-product-price="' . htmlspecialchars(number_format($row['price'], 2)) . '">Order Now</a>';
            echo '    </p>';
            echo '<button class="btn btn-danger delete-map" data-id="' . $row['id'] . '">Delete</button>'; // زر الحذف
                echo '<a style="margin-left:1%;" class="btn btn-warning modify-product" data-id="' . $row['id'] . '">Modify</a>'; // زر التعديل
            echo '</div>';
        }

        // عرض المنتجات المخفية
        for ($i = 3; $i < $totalProducts; $i++) {
            $row = $products[$i];
            echo '<div class="col-lg-4 menu-item  d-none">'; // أضف d-none لجعلها مخفية
            echo '   <br><br><a href="uploads/' . htmlspecialchars($row['img']) . '" class="glightbox">';
            echo '        <img src="uploads/' . htmlspecialchars($row['img']) . '" class="menu-img img-fluid" alt="">';
            echo '    </a>';
            echo '    <h4>' . htmlspecialchars($row['name']) . '</h4>';
            echo '    <p class="price">$' . htmlspecialchars(number_format($row['price'], 2)) . '</p>';
            echo '    <p class="ingredients">';
            echo '      <a class="btn-getstarted whatsapp-order" href="#" data-product-name="' . htmlspecialchars($row['name']) . '" data-product-price="' . htmlspecialchars(number_format($row['price'], 2)) . '">Order Now</a>';
            echo '    </p>';
            echo '<button class="btn btn-danger delete-map" data-id="' . $row['id'] . '">Delete</button>'; // زر الحذف
                echo '<a style="margin-left:1%;" class="btn btn-warning modify-product" data-id="' . $row['id'] . '">Modify</a>'; // زر التعديل
            echo '</div>';
        }

        // زر "See More" إذا كان هناك المزيد من المنتجات
        if ($totalProducts > 3) {
            echo '<div class="col-12  see-more">';
            echo '    <button id="seeMoreBtn" type="button" class="btn btn-primary">See More</button>';
            echo '</div>';
        }
} else {
    echo "<p>No products found</p>";
}

$conn->close();
?>
</div>
<div class="col-12 text-center">
    <button style="margin-left: 80%;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
        Add Product
    </button>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const seeMoreBtn = document.getElementById('seeMoreBtn');

    // Function to show all hidden products when clicking "See More"
    function showAllProducts() {
        const hiddenProducts = document.querySelectorAll('.menu-item.d-none'); // العناصر المخفية
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
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.delete-map').on('click', function() {
        console.log('Delete button clicked'); // Debug log
        var mapId = $(this).data('id'); // Get the map ID from the delete button

        if (confirm('Are you sure you want to delete this map?')) {
            $.ajax({
                type: 'POST',
                url: 'delete_map.php', // Ensure this is the correct file for handling deletion
                data: { id: mapId },
                success: function(response) {
                    alert(response); // Show a success or error message
                    $('#map_' + mapId).remove(); // Remove the item from the front-end
                },
                error: function() {
                    alert('Error deleting map.');
                }
            });
        }
    });

    $('.modify-product').on('click', function() {
        var productId = $(this).data('id');

        // إجراء AJAX للحصول على تفاصيل المنتج
        $.ajax({
            type: 'GET',
            url: 'get_map.php',
            data: { id: productId },
            success: function(response) {
                var product = JSON.parse(response);
                $('#modifyProductId').val(product.id);
                $('#modifyProductName').val(product.name);
                $('#modifyProductPrice').val(product.price);
                $('#modifyProductModal').modal('show');
            },
            error: function() {
                alert('Error retrieving product details.');
            }
        });
    });
    $('#modifyProductForm').on('submit', function(event) {
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'update_map.php',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                alert(response);
                $('#modifyProductModal').modal('hide');
                location.reload(); // Reload the page to show the updated product
            },
            error: function() {
                alert('Error updating product.');
            }
        });
    });
});
</script>
<div class="modal fade" id="modifyProductModal" tabindex="-1" aria-labelledby="modifyProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modifyProductModalLabel">Modify Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="modifyProductForm">
                    <input type="hidden" name="id" id="modifyProductId">
                    <div class="mb-3">
                        <label for="modifyProductName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="modifyProductName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="modifyProductPrice" class="form-label">Price</label>
                        <input type="number" class="form-control" id="modifyProductPrice" name="price" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="modifyProductImage" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="modifyProductImage" name="image" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="category_id" value="<?php echo $category_id; ?>"> <!-- إضافة حقل مخفي لـ category_id -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </form>
                <div id="responseMessage"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#addProductForm').on('submit', function(e) {
        e.preventDefault(); // منع إعادة تحميل الصفحة

        var formData = new FormData(this); // إنشاء FormData من الفورم

        $.ajax({
            type: 'POST',
            url: 'add_map.php', // ملف الـ PHP الذي يقوم بإضافة المنتج
            data: formData,
            contentType: false,
            processData: false,
            success: function() {
                // إظهار رسالة النجاح
                $('#responseMessage').removeClass('error-message').addClass('success-message').html('Product added successfully');
                
                // إضافة الكود هنا لإضافة المنتج إلى عرض المنتجات في الصفحة
                // يمكن أن تستخدم طريقة مثل:
                // $('#productList').append('<div>' + responseProductHTML + '</div>');
            },
            error: function() {
                $('#responseMessage').removeClass('success-message').addClass('error-message').html('حدث خطأ أثناء إضافة المنتج.');
            }
        });
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