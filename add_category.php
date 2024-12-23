
<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $prand_id = $_POST['prand_id']; // الحصول على معرف البراند المختار
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $target_dir = "uploads/"; 
    $target_file = $target_dir . basename($image);
    
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true); 
    }
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        // إدراج البيانات في جدول المنتجات مع معرف البراند
        $sql = "INSERT INTO category (prand_id, name, img) VALUES ('$prand_id', '$name', '$image')";
        
        if ($conn->query($sql) === TRUE) {
            echo "تم رفع المنتج بنجاح!";
        } else {
            echo "خطأ: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "حدث خطأ أثناء رفع الصورة.";
    }
}

$conn->close();
?>
