<?php
include 'db.php'; // تأكد من وجود الاتصال بقاعدة البيانات هنا

header('Content-Type: application/json'); // تحديد الهيدر ليكون JSON

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // استخراج معلومات الملف من الفورم
    $image = $_FILES['brandImage']['name']; // الحصول على اسم الصورة المرفوعة
    $image_tmp = $_FILES['brandImage']['tmp_name']; // موقع الملف المؤقت
    $target_dir = "uploads/"; // المجلد الذي يتم فيه حفظ الصور
    $target_file = $target_dir . basename($image); // المسار الكامل لحفظ الصورة

    // إنشاء مجلد uploads إذا لم يكن موجودًا
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true); 
    }

    // نقل الملف المرفوع إلى الوجهة المحددة
    if (move_uploaded_file($image_tmp, $target_file)) {
        // إدخال فقط اسم الملف في قاعدة البيانات، بدون المسار الكامل
        $sql = "INSERT INTO prands (img) VALUES ('$image')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(["success" => true, "message" => "Prand added successfully"]);
        } else {
            echo json_encode(["success" => false, "message" => "Error: " . $conn->error]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "حدث خطأ أثناء رفع الصورة."]);
    }
}

$conn->close();
?>
