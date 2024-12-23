<?php
include 'db.php'; // الاتصال بقاعدة البيانات

if (isset($_POST['id'])) {
    $bookId = $_POST['id'];
    
    // تأكد من أن id المنتج صالح
    $sql = "DELETE FROM books WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $bookId);
    
    if ($stmt->execute()) {
        echo "Book deleted successfully.";
    } else {
        echo "Error deleting book: " . $stmt->error;
    }
    
    $stmt->close();
}
$conn->close();
?>
