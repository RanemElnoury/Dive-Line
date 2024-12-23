<?php
include 'db.php'; // الاتصال بقاعدة البيانات

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // تحقق من وجود الـ ID في البيانات المرسلة
  
    $category_id = $_POST['id'];  // استلام الـ ID
  

    // استلام باقي البيانات
    $name = $_POST['name']; // الاسم الجديد
    $image = $_FILES['image']; // صورة الفئة

    // تحقق إذا كانت صورة جديدة تم رفعها
    $image_name = null;
    if ($image['name']) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image["name"]);
        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            $image_name = $image["name"];
        } else {
            echo "Error uploading image.";
            exit;
        }
    }

    // بناء الاستعلام بناءً على وجود صورة جديدة أم لا
    if ($image_name) {
        $sql = "UPDATE category SET name = ?, img = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $name, $image_name, $category_id);
    } else {
        $sql = "UPDATE category SET name = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $name, $category_id);
    }

    // تنفيذ الاستعلام وإرسال الرد
    if ($stmt->execute()) {
        echo "Category updated successfully.";
    } else {
        echo "Error updating category: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
