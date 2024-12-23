
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
        $sql = "INSERT INTO maps (name, price, img) VALUES ('$name', '$price', '$image')";
        
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