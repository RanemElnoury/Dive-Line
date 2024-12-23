<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="main.png" rel="icon" style="width: 50px; /* حجم الصورة */
    height: 50px; /* نفس الارتفاع للحصول على مربع */
    border-radius: 50%; /* يجعل الصورة دائرية */
    object-fit:contain; /* للحفاظ على نسبة الصورة */">
  <style>
    .featured-clay {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .brand-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: calc(13% - 10px); /* Each item takes approximately 13% of the total width */
      padding: 15px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 12px;
      background-color: #e1e7f2d6;
    }

    .brand-item img {
      width: 50px;
      height: 50px;
      margin-right: 10px;
    }

    .hidden {
      display: none;
    }

    #additional-brands {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      width: 100%;
    }

    #seeMoreBtn {
      margin-top: 20px;
    }
  </style>
</head>
<body>
<div class="dashboard-river">
  <div class="dashboard-container">
    <div class="dashboard">
      <div class="ui-row-1">
        <div class="profile-small">
          <svg ...></svg>
          <svg ...></svg>
        </div>
      </div>

      <div class="ui-row-2">
        <div class="main-content">
          <div class="header">
            <div class="page-display">
              <img src="logo.png" width="60%" height="70%">
            </div>
          </div>

          <div class="results" id="results"></div>

          <hr>

          <!-- عرض العلامات التجارية -->
          <div class="featured-clay" id="brand-container">
            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            include 'db.php';

            // استعلام للحصول على العدد الكلي للعلامات التجارية
            $countSql = "SELECT COUNT(*) as total FROM prands";
            $countResult = $conn->query($countSql);
            $totalBrands = $countResult->fetch_assoc()['total'];

            // استعلام لتحميل جميع العلامات التجارية
            $sql = "SELECT id,img FROM prands";
            $result = $conn->query($sql);
            $count = 0; // Counter to keep track of displayed brands

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $brandId = $row['id'];
                    $brandImage = $row['img'];

                    // Determine if the brand should be hidden after the first 5
                    $hiddenClass = $count >= 14 ? 'hidden' : '';
                    $count++;

                    // عرض العلامة التجارية
                    echo '<div class="brand-item ' . $hiddenClass . '" id="brand_' . $brandId . '">';
                    echo '    <a href="admin_categories.php?prand_id=' . $brandId . '" id="brand-link">';
                    echo '        <img style="width: 50px; height: 50px; margin-right: 5px;" src="uploads/' . htmlspecialchars($brandImage) . '" class="small-image">';
                    echo '    </a><br>';
                    echo '    <button class="btn btn-danger delete-brand" style="z-index: 1; position: relative;" data-id="' . $brandId . '">Delete</button>';
                    echo '</div>';
                }
            } else {
                echo "No results found.";
            }

            // إغلاق الاتصال
            $conn->close();
            ?>
          </div>

          <!-- عرض زر "See More" إذا كان العدد الكلي للعلامات التجارية أكبر من 5 -->
          <?php if ($totalBrands > 14): ?>
            <button id="seeMoreBtn" class="btn btn-primary">See More</button>
          <?php endif; ?>

          <hr>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const seeMoreBtn = document.getElementById('seeMoreBtn');

    // Show hidden brands on button click
    seeMoreBtn.addEventListener("click", function() {
        // Select all hidden brand items and remove the 'hidden' class
        const hiddenBrands = document.querySelectorAll('.brand-item.hidden');
        hiddenBrands.forEach(brand => {
            brand.classList.remove('hidden');
        });
        seeMoreBtn.style.display = "none"; // Hide the "See More" button
    });
});

    // وظيفة الحذف للعلامة التجارية
    $(document).on('click', '.delete-brand', function() {
        var brandId = $(this).data('id');

        if (confirm('Are you sure you want to delete this Brand?')) {
            $.ajax({
                type: 'POST',
                url: 'delete_brand.php',
                data: { id: brandId },
                success: function(response) {
                    alert(response);
                    $('#brand_' + brandId).remove(); // إزالة العلامة التجارية من الواجهة
                },
                error: function() {
                    alert('Error deleting Brand.');
                }
            });
        }
    });
</script>

</body>
</html>
