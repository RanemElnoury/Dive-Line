<?php
include 'db.php'; // الاتصال بقاعدة البيانات

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $currency = $_POST['currency']; // استقبال العملة

    // تخزين الصورة إذا تم رفعها
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $img = $_FILES['image']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($img);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    } else {
        $img = null;
    }

    // إضافة المنتج مع العملة إلى قاعدة البيانات
    $sql = "INSERT INTO products (name, price, currency, img) VALUES ('$name', '$price', '$currency', '$img')";

    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
