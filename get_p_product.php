<?php
include 'db.php'; // الاتصال بقاعدة البيانات

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL لجلب المنتج
    $sql = "SELECT * FROM p_products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
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
