<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="./style.css">
  <link href="main.png" rel="icon" style="width: 50px; /* حجم الصورة */
    height: 50px; /* نفس الارتفاع للحصول على مربع */
    border-radius: 50%; /* يجعل الصورة دائرية */
    object-fit:contain; /* للحفاظ على نسبة الصورة */">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <style>
    #buttons {
        text-decoration: none;
        font-weight: bold;
    }

    .success-message {
        color: green;
        font-weight: bold;
    }
    .error-message {
        color: red;
        font-weight: bold;
    }
    #name{
      color: goldenrod;
      text-decoration: none;
      font-weight: bold; 
    }
    .styled-button {
        display: flex;
        justify-content: center;
        align-items: center;
        color: goldenrod;
        background-color: whitesmoke;
        width: auto;
        height: auto;
        min-width: 150px;
        min-height: 100px;
        padding: 20px;
        margin: 10px;
        border-radius: 12px;
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.4s ease-in-out;
        border: none;
        cursor: pointer;
    }
    .hidden {
        display: none;
    }
    .search-container {
    cursor: pointer; /* لتغيير المؤشر عند تمرير الماوس */
}
.styled-button:hover{
    background-color:#47b2e463;
}

.search {
    display: flex;
    align-items: center;
}

#search {
    padding: 5px;
    margin-right: 10px;
}

.search-form {
    display: flex; /* استخدام flex لتوزيع العناصر */
    align-items: center; /* محاذاة العناصر في المنتصف عمودياً */
    margin-right: 20px; /* مسافة بين حقل البحث والعناصر الأخرى */
}

.search-form input[type="text"] {
    padding: 8px; /* إضافة بعض المساحة داخل حقل الإدخال */
    border: 1px solid rgb(203, 194, 22); /* لون الحدود */
    border-radius: 10px; /* زوايا دائرية */
    width: 170px; /* عرض حقل الإدخال */
}

.search-form button {
    background-color: #37517e; /* لون خلفية الزر */
    border: none; /* إزالة الحدود */
    color: white; /* لون النص */
    padding: 8px 12px; /* مساحة داخل الزر */
    border-radius: 10px; /* زوايا دائرية */
    cursor: pointer; /* تغيير شكل المؤشر عند التحويم */
    margin-left: 5px; /* مسافة بين حقل الإدخال والزر */
}

.clay-category a {
    text-decoration: none;
    color: rgb(203, 194, 22);
    padding: 10px 15px; /* إضافة مسافة داخل الزر */
    border-radius: 5px; /* زوايا دائرية */
    transition: background-color 0.3s, color 0.3s; /* تأثير انتقال سلس */
}


.clay-category {
    margin-right: 15px; /* إضافة مسافة بين الأزرار */
    margin-top: -10px;
}
.header {
    display: flex;
    justify-content: space-between; /* توزيع العناصر بالتساوي */
    align-items: center; /* محاذاة العناصر عمودياً */
    padding: 10px 20px; /* إضافة بعض المسافة داخل الهيدر */
}
.clay-category a {
    min-width: 100px; /* الحد الأدنى لعرض الزر */
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
                  <img src="logo.png" width="80%" height="75%">
              </div>
              <div class="clay-category">
                 <a id="buttons" href="delete_prand.php" style="color: rgb(203, 194, 22);">Delete Brand</a>
              </div>
              <div class="clay-category">
                 <a id="buttons" href="index.php" style="color: rgb(203, 194, 22);">Logout</a>
              </div>
              <div class="clay-category">
                  <a id="buttons" href="admin_index.php#Product" style="color: rgb(203, 194, 22);">Local Products</a>
              </div>
              <!-- <div class="clay-category">
                  <a id="buttons" href="maps_admin.php#maps" style="color: rgb(203, 194, 22);">Maps</a>
              </div>
              <div class="clay-category">
                  <a id="buttons" href="books_admin.php" style="color: rgb(203, 194, 22);"> Books</a>
              </div> -->
              <div style="width: 10%; height: 20%;"></div>

              <div class="clay-category">
                 <a href="#" id="buttons" style="color: rgb(203, 194, 22);" data-bs-toggle="modal" data-bs-target="#addBrandModal">Add New Brand</a>
              </div>
              
          </div>
          <!-- Search Container -->
         <div class="search-container">
              <form class="search-form" onsubmit="openModal(event)">
                  <input type="text" name="query" placeholder="Search..." required>
                  <button type="submit" aria-label="Search"><i class="bi bi-search"></i></button>
              </form>
          </div>


          <div class="results" id="results"></div>

          <div class="large-banner">
            <h2 style="color: rgb(203, 194, 22);">Welcome Admin</h2>
          </div>
          <hr>

          <!-- PHP to fetch brands -->
          <?php
          error_reporting(E_ALL);
          ini_set('display_errors', 1);

          include 'db.php';

          $sql = "SELECT id,img FROM prands";
          $result = $conn->query($sql);

          echo '<div class="featured-clay" id="brand-container">';
          if ($result->num_rows > 0) {
              $count = 0;
              while($row = $result->fetch_assoc()) {
                  $brandId = $row['id']; 
                  $brandImage = $row['img'];
                  
                  // Display only first 5 brands initially
                  $count++;
                  $hiddenClass = $count > 5 ? 'hidden' : ''; // Hide brands after the 5th one

                  echo '<button class="styled-button ' . $hiddenClass . '" data-id="' . $brandId . '">';
                  echo '    <a href="admin_categories.php?prand_id=' . $brandId . '" id="brand-link">';
                  echo '     <img style="width: 50px; height: 50px; margin-right: 5px;" src="uploads/' . $brandImage . '" class="small-image" >';
                  echo '    </a>';
                  echo '</button>';
              }
          } else {
              echo "No results found."; // Message if no data is found
          }
          echo '</div>'; // Close div

          // Close the connection
          $conn->close();
          ?>
          
          <!-- See More Button -->
          <div class="text-center">
              <button id="see-more-btn" class="btn btn-warning" style="background-color: rgb(203, 194, 22); border-color: rgb(203, 194, 22); display:none;">See More</button>
          </div>

          <hr>
        </div>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal for Adding New Brand -->
<div class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="addBrandModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addBrandModalLabel">Add New Brand</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addBrandForm" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="brandImage" class="form-label">Upload Image</label>
            <input type="file" class="form-control" id="brandImage" accept="image/*" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveBrandBtn">Save Brand</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const hiddenBrands = document.querySelectorAll('.styled-button.hidden');
    const seeMoreBtn = document.getElementById('see-more-btn');

    // Show the "See More" button if there are hidden brands
    if (hiddenBrands.length > 0) {
        seeMoreBtn.style.display = "block";
    }

    // Show hidden brands on button click
    seeMoreBtn.addEventListener("click", function() {
        hiddenBrands.forEach(brand => {
            brand.classList.remove('hidden');
        });
        seeMoreBtn.style.display = "none"; // Hide the "See More" button
    });
});

document.getElementById("saveBrandBtn").addEventListener("click", function() {
    const brandImage = document.getElementById("brandImage").files[0];

    if (brandImage) {
        const formData = new FormData();
        formData.append("brandImage", brandImage);

        // AJAX call to send data to the server
        fetch("add_prand.php", { // Make sure this matches the PHP file name
            method: "POST",
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json(); // Parse the JSON response
        })
        .then(data => {
            if (data.success) {
                console.log("Brand added successfully");
                alert(data.message); // Show success message
                document.getElementById("addBrandForm").reset();
                const modal = bootstrap.Modal.getInstance(document.getElementById("addBrandModal"));
                modal.hide();
            } else {
                // Handle the error message returned from the server
                alert(data.message);
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("There was a problem with your request.");
        });
    } else {
        alert("Please fill in all fields.");
    }
});
</script>

<div id="searchModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Search Results</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="modalBody">
                    <!-- Search results will be populated here -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Bootstrap Icons CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function openModal(event) {
        event.preventDefault(); // Prevent page reload
        const query = event.target.query.value; // Get search value

        console.log('admin_Search query:', query); // Log the search query

        // Make AJAX request to search.php
        $.ajax({
            url: 'search.php',
            type: 'GET',
            data: { query: query },
            success: function(response) {
                console.log('Response received:', response); // Log the response
                $('#modalBody').empty(); // Clear previous content
                if (response) {
                    $('#modalBody').html(response); // Populate modal body with results
                } else {
                    $('#modalBody').html('<p>No results found.</p>'); // Show no results message
                }
                $('#searchModal').modal('show'); // Show modal
            },
            error: function() {
                $('#modalBody').html('<p>An error occurred while loading results.</p>'); // Show error message
                $('#searchModal').modal('show'); // Show modal
            }
        });
    }
</script>

</body>
</html>
