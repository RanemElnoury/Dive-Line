<?php
include 'db.php'; // الاتصال بقاعدة البيانات

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $currency = $_POST['currency']; // استقبال العملة
    $image = $_FILES['image'];
    $image_name = null;

    // تحقق إذا كانت صورة جديدة تم رفعها
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
        $sql = "UPDATE products SET name=?, price=?, currency=?, img=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sissi", $name, $price, $currency, $image_name, $id);
    } else {
        $sql = "UPDATE products SET name=?, price=?, currency=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $name, $price, $currency, $id);
    }

    // تنفيذ الاستعلام وإرسال الرد
    if ($stmt->execute()) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
