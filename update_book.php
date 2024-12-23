<?php
include 'db.php'; // الاتصال بقاعدة البيانات

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];

    // Upload the new image if provided
    if ($image['name']) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image["name"]);
        move_uploaded_file($image["tmp_name"], $target_file);
        $sql = "UPDATE books SET name=?, price=?, img=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sisi", $name, $price, $image["name"], $id);
    } else {
        $sql = "UPDATE books SET name=?, price=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $name, $price, $id);
    }

    if ($stmt->execute()) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
