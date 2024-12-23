<?php
// تمكين الإبلاغ عن الأخطاء
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php'; // الاتصال بقاعدة البيانات

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
    $limit = isset($_POST['limit']) ? intval($_POST['limit']) : 10;

    // الاستعلام لجلب العلامات التجارية بحد وعدد
    $sql = "SELECT id, name, img FROM prands LIMIT $limit OFFSET $offset";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $brandId = $row['id'];
            $brandName = $row['name'];
            $brandImage = $row['img'];

            // إرجاع العلامات التجارية كـ HTML ليتم إضافتها
            echo '<div class="brand-item" id="brand_' . $brandId . '">';
            echo '    <a href="admin_categories.php?prand_id=' . $brandId . '" id="brand-link">';
            echo '        <img style="width: 50px; height: 50px; margin-right: 5px;" src="uploads/' . htmlspecialchars($brandImage) . '" class="small-image" alt="' . htmlspecialchars($brandName) . '">';
            echo '    </a><br>';
            echo '    <button class="btn btn-danger delete-brand" style="z-index: 1; position: relative;" data-id="' . $brandId . '">Delete</button>';
            echo '</div>';
        }
    } else {
        // إرجاع استجابة فارغة إذا لم يكن هناك المزيد
        echo '';
    }

    // إغلاق الاتصال
    $conn->close();
}
