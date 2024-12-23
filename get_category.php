<?php
include 'db.php'; // الاتصال بقاعدة البيانات
if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];
    $sql = "SELECT name,img FROM category WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $categoryId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        echo json_encode($product);
    } else {
        echo json_encode([]);
    }

    $stmt->close();
}
$conn->close();
?>
