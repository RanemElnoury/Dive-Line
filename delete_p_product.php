<?php
include 'db.php'; // الاتصال بقاعدة البيانات

if (isset($_POST['id'])) {
    $productId = $_POST['id'];
    
    // تأكد من أن id المنتج صالح
    $sql = "DELETE FROM p_products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId);
    
    if ($stmt->execute()) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . $stmt->error;
    }
    
    $stmt->close();
}
$conn->close();
?>
