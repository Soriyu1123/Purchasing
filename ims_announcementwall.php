<?php
require('includes/ims_header_std.php');
require('includes/ims_connection.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Announcements</title>
    <style>
    body {
        background-image: url("https://images.unsplash.com/photo-1503551723145-6c040742065b-v2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: Arial, sans-serif;
    }

    .announcement {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 10px;
    }

    .ctr_ann{
        margin-top: 120px;
    }

    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem;
    }

    </style>
</head>

<body>
    <!-- Container -->
    <div class="container ctr_ann">
        <div class="row">
            <div class="card" style="width: 50rem; height: 50rem">
                <div class="col-lg">
                    <div class="card-body">
                        <header><h1>List of Announcements</h1></header>
                        <div class="m-5"></div>
                        <?php
                              // Fetch announcements from the database
                              $sql = "SELECT * FROM announcement_wall ORDER BY anc_date DESC";
                              $result = $conn->query($sql);

                              // Display announcements
                              if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                  echo '<div class="announcement">';
                                  echo '<p>' . $row['anc_cont'] . '</p>';
                                  echo '<p>Date: ' . $row['anc_date'] . '</p>';
                                  echo '</div>';
                                }
                              } else {
                                echo '<p>No announcements found.</p>';
                              }

                              $conn->close();
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>