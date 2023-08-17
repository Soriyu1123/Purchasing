<?php
require('includes/ims_header_std.php');
require('includes/ims_connection.php');
include('includes/ims_sidepnl.php');
// Fetch categories from the database
$categories_query = mysqli_query($conn, "SELECT * FROM item_type");
$categories = array();
while ($category_row = mysqli_fetch_assoc($categories_query)) {
    $categories[] = $category_row;
}

$run = mysqli_query($conn, "SELECT c.*, i.*
FROM categories AS c
INNER JOIN item_type AS i ON c.department = i.item_types;");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    
    <title>Merchandise</title>
</head>

<style>

body {
    background-image: url(https://images.wallpaperscraft.com/image/single/notebook_inscription_words_211407_1280x720.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

table,
th,
td {
    border: 1px solid black;
}

th,
td {
    padding-left: 8px;
    padding-right: 8px;
}

tr:hover {
    background-color: black;
    color: white;
}


.subcategory {
    padding-left: 15px;
}

.cph {
    background-color: #fff;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 1);

}

.ctr {
    margin-top: 120px;
}
</style>

<body>
    <!-- Table -->
    <table align="center" border="1" cellspacing="0" cellpadding="0">


        <!-- 
        <tr style='background-color:#232D3D; color:white;' class="heading">
            <th>Item Name</th>
            <th>Description</th>
            <th>Availability</th>
            <th>Price</th>
        </tr>

        <?php
            $i = 1;
                if ($num = mysqli_num_rows($run) > 0) {
                while ($result = mysqli_fetch_assoc($run)) {
                    echo "
                <tr class='data' style='border: 1px solid'> 
                <td>" . $result['product_name'] . "</td>
                <td>" . $result['product_desc'] . "</td>      
                <td>" . $result['availability'] . "</td>
                <td>" . $result['price'] . " php";
                    "</td>                    
                </tr>  
                ";
                }
            }
        ?> -->
    </table>

    <div class="container p-0 ctr">
        <div class="row mx-auto m-5 w-75">

            <div class="col md-2 p-5">
                <div class="card mx-auto cph" alt="cph">
                    <img class="card-img-top" src="https://www.eclosio.ong/wp-content/uploads/2018/08/default.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><strong>Image 1 Place Holder.</strong></p>
                    </div>
                </div>
            </div>

            <div class="col md-2 p-5">
                <div class="card mx-auto cph" alt="cph">
                    <img class="card-img-top img2" src="https://www.eclosio.ong/wp-content/uploads/2018/08/default.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><i>Image 2 Place Holder.</i></p>
                    </div>
                </div>
            </div>

            <div class="col md-2 p-5">
                <div class="card mx-auto cph" alt="cph">
                    <img class="card-img-top img2" src="https://www.eclosio.ong/wp-content/uploads/2018/08/default.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Image 2 Place Holder.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>