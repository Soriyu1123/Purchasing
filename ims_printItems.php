<?php
    require('includes/ims_headeradminadmin.php');
    require('includes/ims_connection.php');

    $run = mysqli_query($conn, "select * from `items`");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
</head>

<style>
@media print {
    .hide-on-print {
        display: none;
    }
}

.items,
th,
td {
    padding-left: 15px;
    padding-right: 15px;
    border: 1px solid black;
}
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="card" style="width: 50rem; height: auto">
                <div class="col-lg">
                    <div class="card-body">
                        <i class="fa-solid fa-boxes-stacked fa-2xl ml-3 mb-4" style="color: #0f100f;"></i>

                        <div id="printable-items">
                            <h1>All Items</h1>
                            <table class="items" align="center" border="1" cellspacing="0" cellpadding="0">
                                <tr class="heading">
                                    <!-- <th>ID</th> -->
                                    <th>Item Code</th>
                                    <th>Item Name</th>
                                    <th>Department</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>

                                <?php
                                    $i = 1;
                                    if ($num = mysqli_num_rows($run) > 0) {
                                        while ($result = mysqli_fetch_assoc($run)) {
                                            echo "
                                                <tr class='data' style='border: 1px solid'>
                                                    <td>" . $result['id'] . "</td>
                                                    <td>" . $result['product_name'] . "</td>
                                                    <td>" . $result['product_desc'] . "</td>      
                                                    <td>" . $result['price'] . "</td>    
                                                    <td>" . $result['stocks'] . "</td>
                                                </tr>";
                                        }
                                    }
                                ?>
                            </table>
                            <div class="margin" style="margin:20px"></div>
                            <!--"Print Items" button -->
                            <button class="hide-on-print" onclick="printItems()">Print Items</button>
                        </div>


                        <!-- JavaScript for Print Functionality -->
                        <script>
                        function printItems() {
                            const elementToPrint = document.getElementById('printable-items');
                            const originalDisplay = elementToPrint.style.display;

                            // Temporarily show the section to print
                            elementToPrint.style.display = 'block';

                            // Print the section
                            window.print();

                            // Restore the original display property
                            elementToPrint.style.display = originalDisplay;
                        }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>