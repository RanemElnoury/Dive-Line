<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Diveline - أفضل معدات الغوص والرياضات المائية</title>                             
    <meta name="description" content="اكتشف أفضل معدات الغوص والرياضات المائية في Diveline. منتجات
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Then include Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style >
.items {
align-items: center;
    display: flex;
    justify-content: space-between; /* توزيع العناصر بالتساوي */
    overflow-x: auto; /* تمكين التمرير الأفقي */
    padding: 10px 15px; /* إضافة مسافة داخلية للحاوية */
    gap: 15px; /* مسافة بين العناصر */
    flex-wrap: nowrap; /* منع العناصر من النزول إلى الأسفل */
}

.items .item {
    flex: 0 0 calc(16.66% - 15px); /* توزيع 6 عناصر بالتساوي في السطر */
    max-width: 200px; /* تحديد عرض أقصى */
    text-align: center; /* توسيط المحتوى */
    box-sizing: border-box; /* ضمان عدم تأثير padding على العرض */
}

.items .item img {
    width: 100%; /* ضبط العرض */
    height: auto; /* الحفاظ على النسبة */
    max-height: 100px; /* تقليل الارتفاع */
    display: block;
}


.items::-webkit-scrollbar {
    height: 8px;
}

.items::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
}

.items::-webkit-scrollbar-thumb:hover {
    background: #555;
}


#splash-screen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    opacity: 1;
    transition: opacity 1s ease-in-out;
    background-image: url('bg.png'); /* تعيين صورة الخلفية */
    background-size: cover; /* جعل الصورة تغطي كامل الشاشة */
    background-position: center; /* تمركز الصورة */
    background-repeat: no-repeat;
}

/* بعد إخفاء splash screen */
#splash-screen.hidden {
    opacity: 0;
    pointer-events: none;
}

/* إعدادات الصورة */
.splash-image {
    width: 80%;
    max-width: 800px;
    height: auto;
    transform: scale(0.8); /* تبدأ صغيرة */
    animation: zigzag 2s ease-in-out infinite; /* تطبيق حركة الزجزاج */
    transition: transform 1s ease-in-out; /* تكبير سلس */
}

/* حركة الزجزاج */
@keyframes zigzag {
    0% {
        transform: translateX(0) translateY(0) scale(0.8);
    }
    25% {
        transform: translateX(-20px) translateY(-10px) scale(0.9);
    }
    50% {
        transform: translateX(20px) translateY(10px) scale(1);
    }
    75% {
        transform: translateX(-20px) translateY(10px) scale(0.9);
    }
    100% {
        transform: translateX(0) translateY(0) scale(0.8);
    }
}

/* عند تحميل الصورة بالكامل */
#splash-screen.visible .splash-image {
    transform: scale(1); /* تكبير الصورة */
}

/* إخفاء المحتوى الأساسي حتى يتم عرضه */
#main-content {
    display: none;
}
     
header {
    display: flex;
    
    align-items: center; /* محاذاة العناصر رأسياً */
    padding: 10px 20px; /* إضافة بعض المسافة داخل الهيدر */
    flex-wrap: nowrap; /* يمنع العناصر من التدوير عند تصغير الشاشة */
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


/* Center the image inside the list item */
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
.logo {
    height: auto; /* الحفاظ على النسبة الأصلية للصورة */
    max-height: 110px;
    margin-right: 10px; /* تقليل المسافة بين الصورة والعناصر الأخرى */
    /* تقريب الصورة إلى اليسار */
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
    width: 170px; /* عرض حقل الإدخال */
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

/* For devices with screen width less than or equal to 1024px (Tablets and small laptops) */
/* For devices with screen width less than or equal to 1024px (Tablets and small laptops) */
@media (min-width: 1025px) and (max-width: 1200px) {
    header {
        display: flex;
        justify-content: space-between; /* توزيع العناصر بالتساوي */
        align-items: center; /* محاذاة العناصر عمودياً */
        padding: 20px 40px; /* زيادة padding ليكون أكبر قليلاً */
        background-color: #f8f8f8; /* لون الخلفية للهيدر */
    }

    .navmenu ul {
        display: flex;
        flex-wrap: nowrap; /* منع التفاف العناصر */
        justify-content: center; /* محاذاة العناصر في الوسط */
        margin: 0;
        padding: 0;
        list-style: none; /* إزالة النقاط من القائمة */
    }

    .navmenu ul li {
        margin: 0 25px; /* زيادة المسافة بين العناصر */
        text-align: center;
        white-space: nowrap; /* منع التفاف النص */
    }

    .logo {
        max-height: 80px; /* ضبط ارتفاع الشعار */
        margin-right: 12%; /* مساحة جانبية للشعار */
    }

    .search-form {
        display: flex; /* عرض نموذج البحث */
        justify-content: flex-end; /* محاذاة نموذج البحث إلى اليمين */
        width: 35%; /* زيادة عرض نموذج البحث */
    }

    .search-form input {
        width: 70%; /* تعديل عرض حقل الإدخال */
        margin-right: 10px; /* مساحة بين الحقل والزر */
    }

    .search-form button {
        width: auto; /* عرض الزر تلقائي */
    }

    .btn-search-mobile {
        display: none; /* إخفاء زر البحث على الشاشات الأكبر */
    }

    .menu-item {
        width: auto; /* السماح للعناصر بالتكيف حسب المحتوى */
        float: none; /* إزالة الفلو لتسهيل التخطيط */
        text-align: center; /* محاذاة العناصر في الوسط */
    }
}
/* For devices larger than phones but smaller than laptops */
@media (min-width: 769px) and (max-width: 1024px) {
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px; /* Adjust padding */
    }

    .navmenu ul {
        display: flex;
        flex-wrap: wrap; /* Allow wrapping of items if needed */
        justify-content: center;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .navmenu ul li {
        margin: 5px 15px; /* Provide adequate spacing between items */
        text-align: center;
        white-space: nowrap; /* Prevent text wrapping */
        flex-shrink: 1; /* Allow items to shrink as necessary */
    }

    .logo {
        max-height: 80px; /* Ensure logo fits well */
        margin-right: 20%;
    }

    .btn-getstarted {
        padding: 8px 16px; /* Adjust padding */
        font-size: 14px; /* Adjust font size */
    }

    .search-form {
        display: flex;
        justify-content: center;
        width: 40%; /* Constrain width on larger screens */
    }

    .search-form input {
        width: 100%;
    }

    .search-form button {
        width: auto;
    }
     .search-form {
        display: flex; /* عرض نموذج البحث على الشاشات الأكبر من 768 بكسل */
    }

    .btn-search-mobile {
        display: none; /* إخفاء زر البحث على الشاشات الأكبر من 768 بكسل */
    }
    .menu-item {
        width: 50%; /* Each menu item takes 50% of the row width */
        float: left; /* Ensure they appear next to each other */
        text-align: center;
    }
}

/* Hide the search form on mobile and show the search button */
@media (max-width: 768px) {
      header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px; /* Adjust padding */
    }
    .navmenu ul {
        display: flex;
        flex-wrap: wrap; /* Allow wrapping of items if needed */
        justify-content: center;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .navmenu ul li {
        margin: 5px 15px; /* Provide adequate spacing between items */
        text-align: center;
        white-space: nowrap; /* Prevent text wrapping */
        flex-shrink: 1; /* Allow items to shrink as necessary */
    }

    .logo {
        max-height: 80px; /* Ensure logo fits well */
        margin-right: 10%;
        margin-left: 10%;
    }

    .btn-getstarted {
        padding: 8px 16px; /* Adjust padding */
        font-size: 14px; /* Adjust font size */
        margin-left: -30%;
    }

   

    .search-form {
        display: none;
    }

    .btn-search-mobile {
        display: block;
        background-color: #007bff;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Modal Styles */
    ..modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4); /* هذا يجعل الخلفية مظلمة */
}


    .modal-content {
        background-color: white;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover, .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .menu-item {
        width: 50%; /* Each menu item still takes 50% of the row width */
        float: left;
        text-align: center;
        
    }

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

.modal-search-form {
    display: flex; /* استخدام flex لتوزيع العناصر */
    align-items: center; /* محاذاة العناصر في المنتصف عمودياً */
    margin: 0; /* إزالة أي مسافة إضافية */
}

.modal-search-form input[type="text"] {
    padding: 8px; /* إضافة بعض المساحة داخل حقل الإدخال */
    border: 1px solid #ccc; /* لون الحدود */
    border-radius: 4px; /* زوايا دائرية */
    width: 170px; /* عرض حقل الإدخال */
    flex: 1; /* يسمح لحقل الإدخال بالتمدد ليملأ المساحة المتاحة */
}

.modal-search-form button {
    background-color: #47b2e4; /* لون خلفية الزر */
    border: none; /* إزالة الحدود */
    color: white; /* لون النص */
    padding: 8px 12px; /* مساحة داخل الزر */
    border-radius: 4px; /* زوايا دائرية */
    cursor: pointer; /* تغيير شكل المؤشر عند التحويم */
    margin-left: 5px; /* مسافة بين حقل الإدخال والزر */
}
 .phone-number {
        float: left;
        margin-right: 10px; /* تحديد المسافة بين الأرقام */
    }
    .row.gy-5 {
  display: flex;
  flex-wrap: wrap;
  justify-content: center; /* Ensures items are centered */
}
.items {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.items .category-item {
  width: 300px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* إضافة تأثير box-shadow */
  padding: 20px 40px; /* إضافة مسافة داخلية */
  text-align: center; /* توسيط النص */
  border-radius: 8px; /* إضافة حواف دائرية */
  transition: transform 0.3s, box-shadow 0.3s; /* إضافة تأثير عند المرور بالماوس */
}
.items .category-item a{
  color: black;
  font-weight: 500;
  font-size:20px;
}
.items .category-item:hover {
  transform: translateY(-5px); /* رفع العنصر عند مرور الماوس */
  box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15); /* زيادة تأثير الظل عند المرور */
}
@media (max-width: 768px) {
  .row.gy-5 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center; /* توسيط العناصر */
  }

  .items {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }

  .items .category-item {
    width: 100%; /* ملائمة الحجم في الشاشات الصغيرة */
    max-width: 300px; /* الحفاظ على الحد الأقصى للعرض */
    margin-bottom: 10px; /* إضافة مسافة بين العناصر */
  }
}

/* إخفاء العناصر الإضافية عندما يتجاوز العدد 8 */
.items.category-item:nth-child(n+9) {
    display: none;
}

/* مظهر زر عرض المزيد */
#seeMoreBtn {
    margin-top: 20px;
}


    </style>
</head>


<body class="index-page">
  <div id="splash-screen" class="visible">
        <img src="main.png" alt="Splash Image" class="splash-image"  >
    </div>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <img src="main.png" class="logo" alt="Logo">
        
        <!-- Search Button for Mobile -->
        <button id="search-btn" class="btn-search-mobile d-xl-none">Search</button>

        <!-- Search Form (visible on larger screens) -->
        <form class="search-form" onsubmit="openModal(event)">
            <input type="text" name="query" placeholder="Search..." required>
            <button type="submit"><i class="bi bi-search"></i></button>
        </form>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
<li class="dropdown">
    <a href="#Prands">
        <span>Products</span>
        <i class="bi bi-chevron-down toggle-dropdown"></i>
    </a>
    <ul class="scrollable-dropdown"> 
        <?php
        include 'db.php'; 

        $sql = "SELECT id, name, img FROM category";
        $result = $conn->query($sql);

        $uniqueNames = []; // Initialize array to track unique brand names

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $brandId = $row['id']; 
                $brandName = $row['name'];
                $brandImage = $row['img'];

                // Convert the brand name to lowercase to make the comparison case-insensitive
                $lowercaseBrandName = strtolower($brandName);

                // Check if the brand name already exists in the array (case-insensitive)
                if (!isset($uniqueNames[$lowercaseBrandName])) {
                    echo '<li class="dropdown">';
                    echo '    <a href="category_products.php?category_name=' . urlencode($brandName) . '" id="brand-link">';
                    echo '        <span>' . $brandName . '</span>';
                    echo '    </a>';
                    echo '</li>';

                    // Add the lowercase brand name to the array to prevent duplication
                    $uniqueNames[$lowercaseBrandName] = true;
                }
            }
        } else {
            echo '<li>No brands found</li>';
        }

        $conn->close();
        ?>
    </ul>
</li>


                <li><a href="#services">Services</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
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
            echo '    <a href="categories.php?prand_id=' . $brandId . '" id="brand-link">';
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

        
    </div>

    <!-- Modal for Mobile Search -->
    <div id="mobileSearchModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form class="modal-search-form" onsubmit="openModal(event)">
                <input type="text" name="query" placeholder="Search..." required>
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
</header>

<!-- Search Results Modal -->
<div id="searchResultsModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-ms" role="document" style="max-height: 300px;">
        <div class="modal-content" style="font-size: 0.85em;">
            <div class="modal-header">
                <h5 class="modal-title">Search Results</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody" style="overflow-y: auto;">
                <!-- Content will be populated here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
// Get the modal and button
var mobileModal = document.getElementById("mobileSearchModal");
var btn = document.getElementById("search-btn");
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the mobile modal
btn.onclick = function() {
    mobileModal.style.display = "block";
}

// When the user clicks on <span> (x), close the mobile modal
span.onclick = function() {
    mobileModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == mobileModal) {
        mobileModal.style.display = "none";
    }
}

// Document ready function
$(document).ready(function() {
    $('.search-form').on('submit', openModal); // Reassign event handler when the page loads

    $('.close').on('click', function() {
        $('#mobileSearchModal').modal('hide'); // Close the mobile modal manually
    });
});

function openModal(event) {
    event.preventDefault(); // Prevent page reload
    const query = event.target.query.value; // Get search value

    console.log('Search query:', query); // Log search query

    // Make AJAX request to search.php
    $.ajax({
        url: 'search.php',
        type: 'GET',
        data: { query: query },
        success: function(response) {
            console.log('Response received:', response); // Log response
            $('#modalBody').empty(); // Clear previous content
            if (response) {
                $('#modalBody').html(response); // Populate modal body with results
                $('#searchResultsModal').modal('show'); // Show results modal
 // Show results modal
            } else {
                $('#modalBody').html('<p>لا توجد نتائج.</p>'); // Show no results message
                $('#searchResultsModal').modal('show'); // Show results modal
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error fetching data:', textStatus, errorThrown); // Log error
            $('#modalBody').html('<p>حدث خطأ أثناء تحميل النتائج.</p>'); // Show error message
            $('#searchResultsModal').modal('show'); // Show results modal
        }
    });
}
</script>


    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                        <h1>Dive into the Best Shopping Experience!</h1>
                        <p>Welcome to Dive Line! Immerse yourself in a unique shopping experience and enjoy the best offers and products that suit all your needs.</p>
                        <div class="d-flex">
                            <!-- <a href="#about" class="btn-get-started">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img style="border-radius: 50%;" src="assets/img/photo_6021406779214250552_x.jpg" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->
      <section style="padding: 0;">
    <div class="container">   
        <div class="items">
            <?php
            include 'db.php'; 

            $sql = "SELECT id, name, img FROM prands";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $brandId = $row['id']; 
                    $brandName = $row['name'];
                    $brandImage = $row['img'];
                    echo '<div class="item">';
                    echo '    <a href="categories.php?prand_id=' . $brandId . '" id="brand-link">'; 
                    echo '        <span>' . $brandName . '</span>';
                    echo '        <img src="uploads/' . $brandImage . '" class="small-image" alt="' . $brandName . '">';
                    echo '    </a>';
                    echo '</div>'; // إنهاء العنصر "item"
                }
            } else {
                echo '<p>No brands found.</p>';
            }

            $conn->close();
            ?>
        </div>
    </div>
</section>
<hr>

    

<!-- <section id="mapsbooks" class="about section light-background">
   
    <div class="container section-title" data-aos="fade-up">
        <h2>Maps & Books</h2>
    </div>

    <div class="container">
        <div class="row gy-4">

           
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <div class="image-container">
                    <img src="assets/img/b.jpg" alt="Maps">
                </div>
                <a href="maps.php" class="read-more"><span>Maps</span><i class="bi bi-arrow-right"></i></a>
            </div>

       
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <div class="image-container">
                    <img src="assets/img/n.jpg" alt="Books">
                </div>
                <a href="books.php" class="read-more"><span>Books</span><i class="bi bi-arrow-right"></i></a>
            </div>

        </div>
    </div>
</section> -->
        <section id="Product" class="menu section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Product</h2>
        <p><span>Check </span> <span class="description-title">Dive Line Product</span></p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade active show" id="menu-starters">
                <div class="tab-header text-center">
                    <p></p>
                    <br>
                </div>

                <div class="row gy-5">
                    <?php
                    include 'db.php'; // Include your database connection

                    // Fetch products from the database
                    $sql = "SELECT * FROM products";
                    $result = $conn->query($sql);

                    // Check if there are results and display each product
                    $productCount = 0; // To count the number of products displayed initially
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $name = $row['name'];
                            $price = $row['price'];
                            $currency = $row['currency'];
                            $img = $row['img'];
                            $productCount++;
                            ?>
                            <div class="col-lg-4 menu-item zoom-effect product-item <?php echo ($productCount > 6) ? 'd-none' : ''; ?>">
                               <a href="uploads/<?php echo $img; ?>" class="glightbox">
                                    <img src="uploads/<?php echo $img; ?>" class="menu-img img-fluid" alt="">
                                </a>
                                <h4><?php echo $name; ?></h4>
                                <p class="price"><?php echo number_format($price, 2) . " " . $currency; ?></p>
                                <p class="ingredients">
                                    <a class="btn-getstarted whatsapp-order" 
                                       href="#" 
                                       data-product-name="<?php echo $name; ?>" 
                                       data-product-price="<?php echo number_format($price, 2); ?>">Order Now</a>
                                </p>
                            </div><!-- Menu Item -->
                            <?php
                        }
                    } else {
                        echo "<p>No products found.</p>";
                    }

                    $conn->close(); // Close the database connection
                    ?>
                </div>

                <!-- See More Button -->
                <?php if ($productCount > 6): ?>
                <div class="row">
                    <div class="col-12 text-center">
                        <button id="see-more" class="btn btn-primary mt-4">See More</button>
                    </div>
                </div>
                <?php endif; ?>
            </div><!-- End Starter Menu Content -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Handle WhatsApp order click
        $('.whatsapp-order').on('click', function(e) {
            e.preventDefault(); // منع الانتقال الفوري

            // الحصول على تفاصيل المنتج من المعرفات (data-*)
            var productName = $(this).data('product-name');
            var productPrice = $(this).data('product-price');

            // تكوين نص الرسالة
            var message = "Hello, I would like to order the product: " + productName + " for $" + productPrice;

            // تكوين رابط واتساب مع الرسالة
            var whatsappUrl = "https://wa.me/201007061157?text=" + encodeURIComponent(message);

            // فتح واتساب في نافذة جديدة
            window.open(whatsappUrl, '_blank');
        });

        // See more button click event
        $('#see-more').on('click', function() {
            $('.product-item.d-none').removeClass('d-none'); // Show hidden products
            $(this).hide(); // Hide the 'See More' button
        });
    });
    </script>

</section>
<section id="Product" class="menu section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Products</h2>
        <p><span>Check </span> <span class="description-title">Dive Line Product</span></p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade active show" id="menu-starters">
                <div class="tab-header text-center">
                    <p></p>
                    <br>
                </div>

                <div class="row gy-5" id="product-list">
                <?php
                include 'db.php';

                // استعلام لجلب الفئات
                $sql = "SELECT id, name FROM category";
                $result = $conn->query($sql);

                $uniqueCategories = []; // مصفوفة لتخزين الفئات الفريدة
                $count = 0; // متغير لحساب عدد العناصر المعروضة

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $categoryName = $row['name'];
                        
                        // التحقق من عدم التكرار في الفئات
                        if (!in_array($categoryName, $uniqueCategories)) {
                            $uniqueCategories[] = $categoryName;
                            $count++;
                            ?>
                            <div class="items col-lg-3 col-sm-6 ">
                            <div class="category-item">
                                <h4>
                                    <!-- رابط للانتقال إلى صفحة المنتجات الخاصة بهذه الفئة -->
                                    <a href="category_products.php?category_name=<?php echo urlencode($categoryName); ?>" id="brand-link">
                                        <?php echo $categoryName; ?>
                                    </a>
                                </h4>
                            </div>
                            </div><!-- Category Item -->
                            <?php
                        }
                    }
                } else {
                    echo "<p>No categories found.</p>";
                }
                $conn->close(); // غلق الاتصال مع قاعدة البيانات
                ?>

                </div>

                <!-- زر عرض المزيد -->
                <?php if ($count > 8) { ?>
                <div class="text-center">
                    <button id="seeMoreBtn" class="btn btn-primary">See More</button>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const seeMoreBtn = document.getElementById('seeMoreBtn');
    const extraItems = document.querySelectorAll('#product-list .items:nth-child(n+9)'); // Updated selector
    
    // Hide items after the 8th item initially
    extraItems.forEach(function(item) {
        item.style.display = 'none';
    });

    // Show hidden items when the "See More" button is clicked
    seeMoreBtn.addEventListener('click', function() {
        extraItems.forEach(function(item) {
            item.style.display = 'flex';
            // Show hidden items
        });
        seeMoreBtn.style.display = 'none'; // Hide the "See More" button after clicking
    });
});

</script>
<!-- /Menu Section -->


        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>What Makes Us Different</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4><a href="" class="stretched-link">Quality</a></h4>
                            <p>whe have all kind of products with a greatest quality</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                            <h4><a href="" class="stretched-link">Prices</a></h4>
                            <p>also our product's quality is the best , our prices is suitable for every one</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4><a href="" class="stretched-link">Brands</a></h4>
                            <p>you can find any brand you search about it because we have all local and international brands</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                            <h4><a href="" class="stretched-link">Customer Support</a></h4>
                            <p>Our dedicated support team is available around the clock to assist you with any inquiries or issues you may have.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="assets/img/photo_6021406779214250558_y.jpg" alt="">

            <div class="container">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-9 text-center text-xl-start">
                        <h3>Call To Any Question</h3>
                        <p>Feel free to reach out to us for any inquiries or assistance. Our team is ready to provide you with the answers and support you need. Contact us today!</p>
                    </div>
                    <div class="col-xl-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="tel:+01017029174">Call To Any Question</a>
                    </div>
                </div>

            </div>

        </section><!-- /Call To Action Section -->

        <!-- Portfolio Section -->
        

        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Meet Our Team!</h2>
                <p>We're a dedicated group of professionals working together to bring you the best shopping experience. Our team is here to support and inspire you every step of the way!</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="hisham.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>hisham Sedky</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href="https://www.facebook.com/profile.php?id=100054567784003&mibextid=JRoKGi"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/diveline_store?igsh=MXVrMDd3YzE1dDg3"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="ragab.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Abdelrahman ragab</h4>
                                <span>sales</span>
                                <div class="social">
                                    <a href="https://www.facebook.com/profile.php?id=100054567784003&mibextid=JRoKGi"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/diveline_store?igsh=MXVrMDd3YzE1dDg3"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

     
    

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>How You Can contact us</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>Egypt , Sharm El-Sheikh , Al Malak Hamad Ibn Al Khalifa Street </p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p class="phone-number"><p class="phone-number"><strong>Phone:</strong>
    <a style="color: black;" class="cta-btn align-middle" href="tel:+201017029174">+201017029174</a>
</p>
<p class="phone-number">
    <a style="color: black;" class="cta-btn align-middle" href="tel:+201007061157">+201007061157</a>
</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p><strong>Email:</strong> <a  style="font-size:15px; color:black;" href="mailto:hisham@diveline.top?To=hisham@diveline.top%20subject=Subject%20Here&body=Your%20message%20here">hisham@diveline.top</a></p>
                                </div>
                            </div><!-- End Info Item -->

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3525.7740420120017!2d34.3252081!3d27.908906599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145339004cad4515%3A0x98d98432c84320a1!2sCleopatra%20Travel!5e0!3m2!1sen!2seg!4v1727892750052!5m2!1sen!2seg" width="100%" height="270px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                           </div>
                    </div>

                    <div class="col-lg-7">
                        <!-- <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Your Name</label>
                                    <input type="text" name="name" id="name-field" class="form-control" required="">
                                </div>

                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email-field" required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field" required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Message</label>
                                    <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form> -->

                        <img src="place.jpg" width="100%" height="100%">
                    </div> 

                </div>

            </div>

        </section><!-- /Contact Section -->
        

        <!-- About Section -->
        <section id="hero" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Us</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            Dive Line Store is a specialized shop offering a wide range of diving products and equipment for underwater enthusiasts. From high-quality wetsuits and fins to state-of-the-art diving gear and accessories, the store caters to both beginners and experienced divers. Committed to ensuring safety and performance, Dive Line Store provides top brands and expert advice, helping customers make informed choices for their diving adventures. Whether for recreational diving or professional needs, Dive Line Store is a one-stop destination for all diving essentials.
                        </p>
                        
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> <span>Dive Line Store offers a wide range of diving equipment and products, including high-quality wetsuits and diving gear. </span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>The store is known for its personalized customer service, assisting divers of all levels in choosing the right gear for their needs. </span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Whether you're preparing for a deep-sea adventure or surface snorkeling, Dive Line Store has everything you need to dive with confidence.</span></li>
                        </ul>
                    </div>

                </div>

            </div>

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
                       <p><strong>Email:</strong> <a style="font-size:15px" href="mailto:hisham@diveline.top?To=hisham@diveline.top%20subject=Subject%20Here&body=Your%20message%20here">hisham@diveline.top</a></p>

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
    
    <script>
    // عند تحميل الصفحة
    window.onload = function() {
        // جعل المحتوى الأساسي مخفي أثناء الـ splash screen
        const splash = document.getElementById('splash-screen');
        const mainContent = document.getElementById('main-content');
        
        // إضافة الفئة 'visible' لتحريك الصورة
        splash.classList.add('visible');
        
        // بعد 3 ثوانٍ (أو بعد انتهاء التحميل)، قم بإخفاء شاشة الـ splash
        setTimeout(() => {
            splash.classList.add('hidden'); // إخفاء الـ splash screen
            mainContent.style.display = 'block'; // إظهار المحتوى الرئيسي
        }, 3000); // مدة 3 ثوانٍ قبل الإخفاء
    };
</script>

   
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                // الانتقال إلى العنصر المحدد
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });

                    // إزالة الهاش من الـ URL
                    history.pushState(null, null, ' ');
                }
            });
        });

        window.onload = function() {
            // فحص ما إذا كانت شاشة الـ splash قد ظهرت من قبل
            if (!localStorage.getItem('splashScreenShown')) {
                // عرض شاشة الـ splash لأول مرة
                setTimeout(function() {
                    document.getElementById('splash-screen').classList.remove('visible');
                    document.getElementById('splash-screen').classList.add('hidden');

                    // إظهار المحتوى الأساسي بعد إخفاء splash screen
                    setTimeout(function() {
                        document.getElementById('main-content').style.display = 'block';
                    }, 500); // تأخير 1 ثانية لمطابقة حركة إخفاء splash screen
                }, 4000); // إظهار splash screen لمدة 3 ثوانٍ

                // تخزين المعلومة في Local Storage لتجنب عرض splash screen مرة أخرى
                localStorage.setItem('splashScreenShown', 'true');
            } else {
                // إخفاء الـ splash screen وعرض المحتوى فوراً في الزيارات التالية
                document.getElementById('splash-screen').classList.add('hidden');
                document.getElementById('main-content').style.display = 'block';
            }
        };

        document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
  document.querySelector('.navmenu').classList.toggle('active');
});

    </script>
    <!-- Vendor JS Files -->
    <script>
        // تعديل عنوان URL لعرض فقط https://diveline.top
        if (window.location.href !== 'https://diveline.top/') {
            window.history.replaceState(null, null, 'https://diveline.top/');
        }
    </script>
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