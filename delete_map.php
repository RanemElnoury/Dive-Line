<?php
include 'db.php'; // الاتصال بقاعدة البيانات

if (isset($_POST['id'])) {
    $mapId = $_POST['id'];
    
    // تأكد من أن id المنتج صالح
    $sql = "DELETE FROM maps WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $mapId);
    
    if ($stmt->execute()) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting map: " . $stmt->error;
    }
    
    $stmt->close();
}
$conn->close();
?>
