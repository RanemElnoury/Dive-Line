<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Results</title>

    <style>
        :root {
    --primary-color: goldenrod;
    --border-color: #ddd;
    --text-color: #333;
    --background-color: #f8f9fa;
}

/* Style for products container */
.products-container, .brands-container, .categories-container, .p-products-container {
    display: flex;
    flex-wrap: wrap; /* Allows items to wrap to the next line */
    gap: 15px; /* Space between items */
    margin-bottom: 20px; /* Space below each section */
}

/* Individual product item */
.product-item, .p_product-item, .category-item, .brand-item {
    flex: 1 1 200px; /* Allow items to grow and shrink */
    max-width: 300px; /* Prevent items from growing too large */
    box-sizing: border-box; /* Ensure padding and border are included in total width */
    text-align: center; /* Center the text and image */
    padding: 10px;
    margin: 10px auto;
}
 .p_product-item:hover,.product-item:hover, .brand-item:hover,.category-item:hover{
    transform: scale(1.05); /* Slightly enlarge on hover */
    box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Add shadow effect */
}


.product-item img, .p_product-item img {
    width: 100%;  /* Responsive width */
    max-height: 150px; /* Max height for images */
    object-fit: contain; /* Fit image within its box */
    border-radius: 5px;
}


/* Responsive adjustments */
@media (max-width: 1024px) {
    .product-item, .p_product-item {
        flex: 1 1 calc(33.333% - 15px); /* Three items per row */
    }
}

@media (max-width: 768px) {
    .product-item, .p_product-item {
        flex: 1 1 calc(50% - 15px); /* Two items per row */
    }
}

@media (max-width: 480px) {
    .product-item, .p_product-item, .category-item {
        flex: 1 1 100%; /* One item per row */
    }
}

.h3 {
    font-size: 24px; /* Font size */
    font-weight: bold; /* Make the text bold */
    color: var(--text-color); /* Text color */
    margin: 20px 0; /* Space above and below the heading */
    text-align: center; /* Center the heading */
    border-bottom: 2px solid var(--primary-color); /* Bottom border */
    padding: 10px; /* Padding around the text */
    background-color: var(--background-color); /* Light grey background */
    border-radius: 5px; /* Slightly rounded corners */
}

.categories-container {
    display: flex; /* Use flexbox for layout */
    flex-wrap: wrap; /* Allow items to wrap */
    gap: 20px; /* Space between items */
    justify-content: center; /* Center the items */

}

.category-item {
    
    border-radius: 5px; /* Slightly rounded corners */
    padding: 10px; /* Inner padding */
    text-align: center; /* Center the content */
    font-size: 25px;
    cursor: pointer; /* Indicate that it's clickable */
    transition: transform 0.3s, box-shadow 0.3s; /* Smooth scaling effect on hover */
}


.brand-img {
    max-width: 50%; /* Ensure the brand image is responsive */
    height: 60px; /* Maintain aspect ratio */
    border-radius: 5px; /* Rounded corners for images */
}
a{
    text-decoration: none;
}

    </style>
</head>
<body>
<?php
include 'db.php'; // اتصال بقاعدة البيانات

if (isset($_GET['query'])) {
    $search_query = $conn->real_escape_string($_GET['query']); // تأمين استعلام البحث

    // البحث في المنتجات، البراندات، الفئات، وp_products
    $sql_products = "SELECT * FROM products WHERE name LIKE '%$search_query%'";
    $sql_brands = "SELECT * FROM prands WHERE name LIKE '%$search_query%'";
    $sql_categories = "SELECT c.id AS category_id, c.name AS category_name, b.img AS brand_img 
                       FROM category c
                       LEFT JOIN prands b ON c.prand_id = b.id
                       WHERE c.name LIKE '%$search_query%'";
    $sql_p_products = "SELECT * FROM p_products WHERE name LIKE '%$search_query%'";

    // Execute the queries and check for errors
    $result_products = $conn->query($sql_products);
    if ($result_products === false) {
        die("Error executing query: " . $conn->error);
    }

    $result_brands = $conn->query($sql_brands);
    if ($result_brands === false) {
        die("Error executing query: " . $conn->error);
    }

    $result_categories = $conn->query($sql_categories);
    if ($result_categories === false) {
        die("Error executing query: " . $conn->error);
    }

    $result_p_products = $conn->query($sql_p_products);
    if ($result_p_products === false) {
        die("Error executing query: " . $conn->error);
    }

    // Displaying products
    echo "<h3 class='h3' id='products'>Products found</h3>";
    echo "<div class='products-container'>";
    if ($result_products->num_rows > 0) {
        while ($row = $result_products->fetch_assoc()) {
            $name = htmlspecialchars($row['name']);
            $price = $row['price'];
            $img = htmlspecialchars($row['img']);
            $product_id = $row['id'];
            ?>
            <div class="product-item">
                <a  class="glightbox">
                    <img src="uploads/<?php echo $img; ?>" class="menu-img img-fluid" alt="<?php echo $name; ?>">
                </a>
                <h4><?php echo $name; ?></h4>
                <p class="price">
                    $<?php echo number_format($price, 2); ?>
                </p>
                <p class="ingredients">
                                    <a class="btn-getstarted whatsapp-order" 
                                       href="#" 
                                       data-product-name="<?php echo $name; ?>" 
                                       data-product-price="<?php echo number_format($price, 2); ?>">Order Now</a>
                </p>
            </div><!-- Menu Item -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Handle WhatsApp order click
        $('.whatsapp-order').on('click', function(e) {
            e.preventDefault(); // منع الانتقال الفوري

            // الحصول على تفاصيل المنتج من المعرفات (data-*)
            var productName = $(this).data('product-name');
            var productPrice = $(this).data('product-price');

            // تكوين نص الرسالة
            var message = "Hello, I would like to order the product: " + productName + " for $" + productPrice;

            // تكوين رابط واتساب مع الرسالة
            var whatsappUrl = "https://wa.me/201007061157?text=" + encodeURIComponent(message);

            // فتح واتساب في نافذة جديدة
            window.open(whatsappUrl, '_blank');
        });

        
    });
    </script>
            <?php
        }
    } else {
        echo "<p>No products found for '" . htmlspecialchars($search_query) . "'.</p>";
    }
    echo "</div>"; // End of products-container

    // Displaying brands
    echo "<h3 class='h3'>Brands found</h3>";
echo "<div class='brands-container'>";
if ($result_brands->num_rows > 0) {
    while ($row = $result_brands->fetch_assoc()) {
        $brand_name = htmlspecialchars($row['name']);
        $brand_id = $row['id'];
        $brand_img = htmlspecialchars($row['img']); // Get the brand image path

        // Display brand image and name
        echo "<div class='brand-item'>"; // Optional: you can create a separate class for brand items
        echo "<a href='categories.php?prand_id=$brand_id'>";
        echo "<img src='uploads/$brand_img' alt='$brand_name' class='brand-img' />"; // Display the brand image
        echo "</a>";
        echo "</div>"; // End of brand-item
    }
} else {
    echo "<p>No brands found for '" . htmlspecialchars($search_query) . "'.</p>";
}
echo "</div>"; // End of brands-container


    // Displaying categories
    echo "<h3 class='h3' id='categories'>Categories found</h3>";
    echo "<div class='categories-container'>";

    if ($result_categories->num_rows > 0) {
        while ($row = $result_categories->fetch_assoc()) {
            $category_name = htmlspecialchars($row['category_name']);
            $category_id = $row['category_id'];
            $brand_img = htmlspecialchars($row['brand_img']); // Brand image path

            // Provide a default image if brand image is not available
            if (empty($brand_img)) {
                $brand_img = 'default_image.jpg'; // Path to a default image
            }

            // Display category name with brand image
            echo "<div class='category-item'>";
            echo "<a href='prand_products.php?category_id=" . $category_id . "'>";
            echo "<img src='uploads/" . $brand_img . "' alt='" . $category_name . "' class='brand-img' />";
            echo "<p>" . $category_name . "</p>";
            echo "</a>";
            echo "</div>"; // End of category-item
        }
    } else {
      echo "<p>No Categories found for '" . htmlspecialchars($search_query) . "'.</p>";
}

    echo "</div>"; // End of categories-container

    // Displaying p_products
    echo "<h3 class='h3' id='p_products'>Brand Products found</h3>";
    echo "<div class='p-products-container'>";

    if ($result_p_products->num_rows > 0) {
        while ($row = $result_p_products->fetch_assoc()) {
            $name = htmlspecialchars($row['name']);
            $price = $row['price'];
            $img = htmlspecialchars($row['img']);
            $product_id = $row['id'];
            ?>
            <div class="p_product-item">
                <a  class="glightbox">
                    <img src="uploads/<?php echo $img; ?>" class="menu-img img-fluid" alt="<?php echo $name; ?>">
                </a>
                <h4><?php echo $name; ?></h4>
                <p class="price">
                    $<?php echo number_format($price, 2); ?>
                </p>
                <p class="ingredients">
                                    <a class="btn-getstarted whatsapp-order" 
                                       href="#" 
                                       data-product-name="<?php echo $name; ?>" 
                                       data-product-price="<?php echo number_format($price, 2); ?>">Order Now</a>
                </p>
            </div><!-- P Product Item -->
            <?php
        }
    } else {
        echo "<p style='text-align: center;'>No Brand products found for '" . htmlspecialchars($search_query) . "'.</p>";
    }

    echo "</div>"; // End of p-products-container
}
$conn->close();
?>
</body>
</html>
