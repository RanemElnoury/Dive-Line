<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>
<body>
    <h2>Add New Map</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="name">Book Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" required><br><br>

        <label for="image">Upload Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <input type="submit" value="Add Book">
    </form>
</body>
</html>

<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // اسم المنتج
    $name = $_POST['name'];
    
    // السعر
    $price = $_POST['price'];
    
    // معالجة الصورة
    $image = $_FILES['image']['name'];
    $target_dir = "uploads/"; // مسار حفظ الصور
    $target_file = $target_dir . basename($image); // تأكد من تعيين المسار الصحيح
    
    // التأكد من وجود المجلد "uploads"
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true); // إنشاء المجلد إذا لم يكن موجودًا
    }
    
    // التأكد من رفع الصورة
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        // حفظ البيانات في قاعدة البيانات
        $sql = "INSERT INTO books (name, price, img) VALUES ('$name', '$price', '$image')";
        
        if ($conn->query($sql) === TRUE) {
            // إرجاع كود HTML للمنتج الجديد
            echo '<div class="product"><h6>' . htmlspecialchars($name) . '</h6><p>' . htmlspecialchars($price) . '</p><img src="' . htmlspecialchars($target_file) . '" alt="Product Image"></div>';
        } else {
            echo "خطأ: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "حدث خطأ أثناء رفع الصورة.";
    }
}

$conn->close();

?>