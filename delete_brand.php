<?php
include 'db.php'; // الاتصال بقاعدة البيانات

if (isset($_POST['id'])) {
    $brandId = $_POST['id'];
    
    // تأكد من أن id المنتج صالح
    $sql = "DELETE FROM prands WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $brandId);
    
    if ($stmt->execute()) {
        echo "Brand deleted successfully.";
    } else {
        echo "Error deleting Brand: " . $stmt->error;
    }
    
    $stmt->close();
}
$conn->close();
?>
