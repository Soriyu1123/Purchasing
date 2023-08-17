<?php
require('includes/ims_header_std.php');
require('includes/ims_connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>

<style>
    /* *{        border: 1px solid red;    } */

    body {
        background-image: url("https://images.unsplash.com/photo-1456735190827-d1262f71b8a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2048&q=80");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: Arial, sans-serif;
        line-height: 1.6;
    }

    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .section {
        margin-bottom: 20px;
    }

    h1 {
        margin-bottom: 10px;
    }

    .ctr_abt{
        margin-top: 120px;
    }
</style>

<body>
    <!-- Container -->
    <div class="container ctr_abt">
        <div class="row">
            <div class="card">
                <div class="col">
                    <div class="card-body">

                        <header>
                            <h1>About Us</h1>
                        </header>
                        <div class="section"><br>
                            <h1>Our Story</h1>
                            <p>The Guagua National Colleges, Inc. Purchasing Office has a history steeped in dedication. We've been on a mission to provide the necessary building blocks for academic growth. Our journey is one of resourcefulness, adaptability, and steadfast commitment to ensuring the college's evolution.</p>
                        </div>
                        <div class="section">
                            <h1>Our Mission</h1>
                            <p>Committed to empowering Guagua National Colleges, Inc., our mission revolves around securing vital elements that drive educational excellence. Through strategic sourcing, ethical collaboration, and innovative practices, we contribute to the college's seamless progression towards its educational goals.</p>
                        </div>

                        <div class="section">
                            <h1>Our Team</h1>
                            <p>Meet our dedicated team members of the Purchasing Office who work tirelessly to achieve our goals.</p>
                            <ul>

                            <div class="container text-center mx-auto">
   
                                    <div class="row">

                                        <div class="col">
                                        <img class="w-75 mx-auto rounded-circle border border-secondary" src="includes/img/id1.jpg" alt="">
                                        <li class="list-unstyled">Kazuma Kiryu</li>
                                        <li class="list-unstyled"><strong>Admin</strong></li>
                                        </div>


                                 
                                        <div class="col">
                                        <img class="w-75 mx-auto rounded-circle border border-secondary" src="includes/img/id2.jpeg" alt="">
                                        <li class="list-unstyled">Mary Matsumoto</li>
                                        <li class="list-unstyled"><strong>Staff</strong></li>
                                        </div>
                                  
                                        <div class="col">
                                        <img class="w-75 mx-auto rounded-circle border border-secondary" src="includes/img/id3.png" alt="">
                                        <li class="list-unstyled">Lin Wong</li>
                                        <li class="list-unstyled"><strong>Staff</strong></li>
                                        </div>

                                    </div>
        
                            </div>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>