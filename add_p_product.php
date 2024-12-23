<?php
include 'db.php'; // Ensure the database connection is established here

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_id = isset($_POST['category_id']) ? intval($_POST['category_id']) : 0;
    $name = htmlspecialchars(trim($_POST['name']));
    $price = floatval($_POST['price']);
    $currency = $_POST['currency'];

    if (empty($name) || empty($currency) || $category_id <= 0 || $price <= 0) {
        echo "الرجاء ملء جميع الحقول المطلوبة بشكل صحيح.";
        exit;
    }

    $image = $_FILES['image']['name'];
    $image_temp_name = $_FILES['image']['tmp_name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image); // Use the full path

    // Check if the upload directory exists, if not, create it
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Check for upload errors
    if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        echo "حدث خطأ أثناء رفع الصورة: " . $_FILES['image']['error'];
        exit;
    }

    // Move the uploaded file
    if (move_uploaded_file($image_temp_name, $target_file)) {
        // Prepare the statement
        $stmt = $conn->prepare("INSERT INTO p_products (name, price, img, category_id, currency) VALUES (?, ?, ?, ?, ?)");
        if (!$stmt) {
            echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
            exit;
        }

        // Bind parameters
        $stmt->bind_param("sdsss", $name, $price, $image, $category_id, $currency); // Save only the image name

        // Execute the statement
        if ($stmt->execute()) {
            echo "تم رفع المنتج بنجاح!";
        } else {
            echo "خطأ: " . $stmt->error;
            unlink($target_file); // Optionally delete the uploaded file if there's an error
        }

        $stmt->close();
    } else {
        echo "حدث خطأ أثناء رفع الصورة.";
    }
}

$conn->close();
?>
