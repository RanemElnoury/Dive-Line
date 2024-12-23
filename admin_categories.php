<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Favicons -->
    <link href="main.png" rel="icon" style="width: 50px; /* حجم الصورة */
    height: 50px; /* نفس الارتفاع للحصول على مربع */
    border-radius: 50%; /* يجعل الصورة دائرية */
    object-fit:contain; /* للحفاظ على نسبة الصورة */">

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
.btn-warning{
    margin-left:1%;
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
.scrollable-dropdown {
    max-height: 300px; /* Set your desired fixed height */
    overflow-y: auto; /* Enable vertical scrolling */
    overflow-x: hidden; /* Hide horizontal scrolling if any */
    position: absolute; /* Position it absolutely if needed */
    z-index: 1000; /* Ensure it appears above other content */
    background-color: white; /* Set a background color for visibility */
    border: 1px solid #ccc; /* Optional: Add a border */
    padding: 0px; /* Optional: Add some padding */
    width: 200px;

}

.brand-item {
    text-align: center; /* Center the image */
    padding: 10px;
    margin-left: 0%;
    justify-content: center; /* Center items horizontally */
    align-items: center; /* Center items vertically */

}

.brand-item a {
    display: flex; /* Use flexbox for aligning items */
    justify-content: center; /* Center items horizontally */
    align-items: center; /* Center items vertically */
    height: 70px; /* Set the height to match the image height */
    width: 80px;

}
.service-item h4 a{
        font-size: 17px;
}

.brand-item img {
    width: 80px; /* Adjust image size */
    height: 50px; /* Set fixed height */
    object-fit: fill; /* Maintain aspect ratio and fill the space */
   
}

/* Change background color to blue on hover */
.brand-item:hover {
    background-color:#47b2e463; /* Blue background on hover */
    color: white; /* White text on hover */
    border-radius: 1px; /* Optional: add rounded corners */
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
.delete-category {
    position: relative;
    z-index: 1;
}
    .success-message {
        color: green;
        font-weight: bold;
    }
    .error-message {
        color: red;
        font-weight: bold;
    }

/* Media Queries for smaller devices */
@media (max-width: 768px) {
    .service-item {
        margin: 0 auto;
        text-align: center;
    }
    .icon img {
        max-width: 80%;
        height: auto;
    }
}

@media (max-width: 576px) {
    .service-item {
        margin-bottom: 20px;
    }
    .icon img {
        max-width: 100%;
    }
     .logo {
        max-height: 100px; /* Ensure logo fits well */
        margin-right: 10%;
        margin-left: 10%;
    }

    .btn-getstarted {
        padding: 8px 16px; /* Adjust padding */
        font-size: 14px; /* Adjust font size */
        margin-left: -20%;
    }
}

.hidden {
        display: none;
    }
    .service-item img {
    width: 200px;   /* العرض الثابت */
    height: 170px;  /* الارتفاع الثابت */
    object-fit: fill; /* تأكد من ملاءمة الصورة داخل الأبعاد المحددة */
}




    </style>


</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top" style="background-color: rgba(40, 58, 90, 0.9);">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
                
<img src="main.png" class="logo" alt="Logo">
      
        <nav id="navmenu" class="navmenu">
            <ul>
            <li><a href="dashboard.php" class="active">Home</a></li>
            <!-- <li><a href="maps_admin.php">Maps</a></li>
        <li><a href="books_admin.php">Books</a></li> -->
            <li><a href="admin_index.php">Products</a></li>
                <li class="dropdown" >
            <a href="#Prands"><span>Brands</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="scrollable-dropdown"> <!-- Add a class to make it scrollable -->
                <?php
    include 'db.php'; 

    $sql = "SELECT id, img FROM prands";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $brandId = $row['id'];
            $brandImage = $row['img'];
            
            echo '<li class=" brand-item">';
            echo '    <a href="admin_categories.php?prand_id=' . $brandId . '" id="brand-link">';
            echo '        <img  src="uploads/' . $brandImage . '" class="small-image" >';
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

        <a class="btn-getstarted" href="admin_login.php">logout</a>
    </div>
</header>
<section id="Prands" class="services section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
       <?php
include 'db.php';  // الاتصال بقاعدة البيانات

// الحصول على معرف البراند من الرابط
$prand_id = isset($_GET['prand_id']) ? intval($_GET['prand_id']) : 0;

// التحقق من أن المعرف أكبر من 0
if ($prand_id > 0) {
    // جلب صورة البراند بناءً على المعرف
    $sql_brand = "SELECT img FROM prands WHERE id = $prand_id";
    $result_brand = $conn->query($sql_brand);

    if ($result_brand && $result_brand->num_rows > 0) {
        $brand_row = $result_brand->fetch_assoc();
        $brand_image = $brand_row['img']; // اسم ملف الصورة
        
        // عرض الصورة
        echo '<br><br><br><br><br><img src="uploads/' . $brand_image . '" alt="Brand Image" style="width: 180px; height: 80px;" />'; 
    } else {
        echo '<h2>لا توجد صورة للبراند المحدد.</h2>'; // رسالة في حال عدم العثور على الصورة
    }
} else {
    echo '<h2>معرف البراند غير صالح.</h2>';
}
?>

    </div><!-- End Section Title -->

<div class="container">
    <div class="row gy-4">
        <?php
        // تأكد من تعيين القيم للمتغيرات
        $totalCount = 0; // إجمالي عدد الفئات التي تم استردادها
        $visibleCount = 0; // عدد الفئات التي سيتم عرضها

        // Fetch categories based on brand ID
        if ($prand_id > 0) {
            $sql_category = "SELECT id, name, img FROM category WHERE prand_id = $prand_id";
            $result_category = $conn->query($sql_category);

            if (!$result_category) {
                die("SQL Error: " . $conn->error);
            }

            $categories = [];
            if ($result_category->num_rows > 0) {
                while ($row = $result_category->fetch_assoc()) {
                    $categories[] = $row;
                }
                $totalCount = count($categories); // تعيين إجمالي عدد الفئات
                $visibleCount = $totalCount; // تعيين عدد الفئات التي سيتم عرضها لجميع الفئات
            } else {
                echo "<p>No categories found</p>";
            }
        }

        // Display categories
        $count = 0;
        for ($i = 0; $i < min($visibleCount, $totalCount); $i++) {
            $categoryId = $categories[$i]['id'];
            $categoryName = $categories[$i]['name'];
            $categoryImage = $categories[$i]['img'];
            $count++;
            $hiddenClass = $count > 4 ? 'd-none' : ''; // Use d-none for hidden class
            echo '<div class="col-xl-3 col-md-6 d-flex category-item ' . $hiddenClass . '" data-aos="fade-up" data-aos-delay="100">';
            echo '    <div class="service-item position-relative">';
            echo '        <div class="icon"><img src="uploads/' . htmlspecialchars($categoryImage) . '" alt="' . htmlspecialchars($categoryName) . '"></div>';
            echo '        <h4><a href="p_products_admin.php?category_id=' . $categoryId . '" class="stretched-link">' . htmlspecialchars($categoryName) . '</a></h4>';
            echo '        <button class="btn btn-danger delete-category" style="z-index: 1; position: relative;" data-id="' . $categoryId . '">Delete</button>';
 echo '<a href="#" class="btn btn-warning modify-category" style="z-index: 1; position: relative;" data-id="' . $categoryId . '">Modify</a>';


            echo '    </div>';
            echo '</div>';
        }

        // Add "See More" button if there are additional categories
                ?>
    </div>
<?php if ($totalCount > 4) { // تغيير الشرط هنا لتناسب العدد الذي ترغب فيه
            echo '<div class="col-12 text-center see-more">';
            echo '    <button id="seeMoreBtn" type="button" class="btn btn-primary">See More</button>';
            echo '</div>';
        }
 ?>
    <div class="col-12 text-center">
        <button style="margin-left: 80%;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcategoryModal">
            Add Category
        </button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const seeMoreBtn = document.getElementById('seeMoreBtn');

    // Function to show all hidden categories at once
    function showAllHiddenCategories() {
        const hiddenCategories = document.querySelectorAll('.category-item.d-none');
        hiddenCategories.forEach(function(category) {
            category.classList.remove('d-none'); // Show each hidden category
        });

        // Hide the "See More" button after showing all hidden categories
        seeMoreBtn.style.display = "none"; 
    }

    // Show the "See More" button if there are hidden categories
    if (document.querySelectorAll('.category-item.d-none').length > 0) {
        seeMoreBtn.style.display = "block";
    }

    seeMoreBtn.addEventListener("click", showAllHiddenCategories);
});
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.delete-category').on('click', function() {
        console.log('Delete button clicked'); // Debug log
        var categoryId = $(this).data('id'); // الحصول على id الفئة من زر الحذف

        if (confirm('Are you sure you want to delete this category?')) {
            $.ajax({
                type: 'POST',
                url: 'delete_category.php', // تأكد من أن هذا هو اسم الملف الصحيح
                data: { id: categoryId },
                success: function(response) {
                    alert(response); // إظهار رسالة نجاح أو فشل
                    $('#category_' + categoryId).remove(); // إزالة العنصر من الواجهة
                },
                error: function() {
                    alert('Error deleting category.');
                }
            });
        }
    }); 
    $('.modify-category').on('click', function () {
        var categoryId = $(this).data('id'); 
        $.ajax({
            type: 'GET',
            url: 'get_category.php',
            data: { id: categoryId },
            success: function(response) {
                var category = JSON.parse(response);
                $('#categoryId').val(categoryId);  // Ensure the hidden input gets the ID value
                $('#modifyCategoryName').val(category.name);                
                $('#modifyCategoryModal').modal('show');
            },
            error: function() {
                alert('Error retrieving category details.');
            }
        });
    });

    $('#modifyCategoryForm').on('submit', function (e) {
        e.preventDefault(); // منع إعادة تحميل الصفحة
        var formData = new FormData(this); // الحصول على بيانات النموذج بما في ذلك الملف

        $.ajax({
            type: 'POST',
            url: 'update_category.php', // ملف PHP لمعالجة التحديث
            data: formData,
            processData: false, // لا تقم بمعالجة البيانات (لأنها تحتوي على ملف)
            contentType: false, // لا تقم بتحديد نوع المحتوى تلقائيًا
            success: function (response) {
                alert(response); // عرض رسالة النجاح
                location.reload(); // إعادة تحميل الصفحة لتحديث البيانات (أو يمكنك تحديث العنصر المحدد فقط)
            },
            error: function () {
                alert('Error updating category.');
            }
        });
    });





});

</script>
<div class="modal fade" id="modifyCategoryModal" tabindex="-1" aria-labelledby="modifyCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modifyCategoryModalLabel">Modify Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="modifyCategoryForm" >
                    <input type="hidden" name="id" id="categoryId" value="<?php echo $categoryId; ?>">
   

                    <div class="form-group">
                        <label for="modifyCategoryName">Name</label>
                        <input type="text" class="form-control" id="modifyCategoryName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="modifyCategoryImg" class="form-label">Category Image</label>
                        <input type="file" class="form-control" id="modifyCategoryImg" name="image" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addcategoryModal" tabindex="-1" aria-labelledby="addcategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addcategoryModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addcategoryForm" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Category Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>

                    <!-- حقل مخفي لتمرير prand_id -->
                    <input type="hidden" id="prand_id" name="prand_id" value="<?php echo $prand_id; ?>">

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
    $('#addcategoryForm').on('submit', function(e) {
        e.preventDefault(); // منع إعادة تحميل الصفحة

        var formData = new FormData(this); // إنشاء FormData من الفورم

        $.ajax({
            type: 'POST',
            url: 'add_category.php', // ملف الـ PHP الذي يقوم بإضافة الفئة
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                // إظهار رسالة النجاح
                $('#responseMessage').removeClass('error-message').addClass('success-message').html('Category added successfully');
                
                // تحديث الصفحة أو إضافة الفئة الجديدة إلى القائمة ديناميكيًا هنا
                location.reload();
            },
            error: function() {
                $('#responseMessage').removeClass('success-message').addClass('error-message').html('حدث خطأ أثناء إضافة الفئة.');
            }
        });
    });
});
</script>


</section><!-- /Services Section -->



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
                        <p class="mt-3"><strong>Phone:</strong> <span><a style="color: black; font-size: 15px;" class="cta-btn align-middle" href="tel:+201007061157">+201007061157</a></span></p>
                        <p><strong>Email:</strong> <span>info@diveline.shop</span></p> <p><strong>Email:</strong> <a  style="font-size:15px; color:black;" href="mailto:hisham@diveline.top?To=hisham@diveline.top%20subject=Subject%20Here&body=Your%20message%20here">hisham@diveline.top</a></p>v>
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
    // <script>
    //     // تعديل عنوان URL لعرض فقط https://diveline.top
    //     if (window.location.href !== 'https://diveline.top/') {
    //         window.history.replaceState(null, null, 'https://diveline.top/');
    //     }
    // </script>
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