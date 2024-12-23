<?php
include 'db.php'; // الاتصال بقاعدة البيانات

if (isset($_POST['id'])) {
    $categoryId = $_POST['id'];
    
    // تأكد من أن id المنتج صالح
    $sql = "DELETE FROM category WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $categoryId);
    
    if ($stmt->execute()) {
        echo "Category deleted successfully.";
    } else {
        echo "Error deleting category: " . $stmt->error;
    }
    
    $stmt->close();
}
$conn->close();
?>
