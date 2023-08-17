<?php
require('includes/ims_header_std.php');
require('includes/ims_connection.php');
$run = mysqli_query($conn, "select * from `items`");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="300">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


    <!-- Css -->
    <link rel="stylesheet" href="includes/css/style.css">
    <!-- Script Js -->
    <script src="includes/assests/js/snippets.js"></script>
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>PURCHASING OFFICE</title>
    <!-- Start of Async Drift Code -->
    <script>
    "use strict";

    ! function() {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
            if (t.invoked) return void(window.console && console.error && console.error(
                "Drift snippet included twice."));
            t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page",
                    "hide", "off", "on"
                ],
                t.factory = function(e) {
                    return function() {
                        var n = Array.prototype.slice.call(arguments);
                        return n.unshift(e), t.push(n), t;
                    };
                }, t.methods.forEach(function(e) {
                    t[e] = t.factory(e);
                }), t.load = function(t) {
                    var e = 3e5,
                        n = Math.ceil(new Date() / e) * e,
                        o = document.createElement("script");
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src =
                        "https://js.driftt.com/include/" + n + "/" + t + ".js";
                    var i = document.getElementsByTagName("script")[0];
                    i.parentNode.insertBefore(o, i);
                };
        }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('fcr5viznuf78');
    </script>
    <!-- End of Async Drift Code -->
</head>

<style>
/* *{border: 1px solid red;} */

body {
    background: url(https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Open Sans', sans-serif;
}

.card {
    margin-top: 50px;
    /* margin-bottom: 50px; */
    /* border-radius: 18px; */
    background-color: #212529;
    opacity: 90%;
    color: white
}

.announcement {
    text-align: justify;
    line-height: auto;
    color: black;
}

.announce {
    display: flex;
    margin: auto;
    align-items: center;
    justify-content: center;
}

.carousel-inner {
    margin-top: 190px;
}

.carousel-item {
    border: 0px;

}

.black-button {
    background-color: black;
    border: none;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    margin: 5px;
    transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    /* Adjust the shadow as needed */
}

.black-button:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    /* Adjust the shadow as needed */
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

.announcement {
    font-size: 18px;
    padding: 16px;
    margin-bottom: 10px;
    border-radius: 12px;
}

.gallery_img {
    filter: brightness(50%);
}

.gallery_img:hover {
    filter: brightness(100%);
    transition: 0.4s;
    transform: translateY(-15px);
}

.g2 {
    height: 300px;
}

.g3 {
    height: 370px;
}

.g4 {
    padding-top: 20px;
    width: 770px;
}
</style>

<body>

    <!-- Carousel Start -->

    <div id="carousel-container" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php
        // Fetch announcements from the database
        $sql = "SELECT * FROM announcement_wall ORDER BY anc_date DESC";
        $result = $conn->query($sql);

        // Display announcements as carousel indicators
        $slideIndex = 0;
        while ($row = $result->fetch_assoc()) {
            $active = $slideIndex === 0 ? 'active' : '';
            echo '<button type="button" data-bs-target="#carousel-container" data-bs-slide-to="' . $slideIndex . '" class="' . $active . ' black-button" aria-label="Slide ' . ($slideIndex + 1) . '"></button>';

            $slideIndex++;
        }
        ?>
        </div>

        <div class="carousel-inner">
            <?php
        // Reset the slideIndex for generating carousel items
        $slideIndex = 0;

        // Display announcements as carousel slides
        $result->data_seek(0); // Reset the result pointer
        while ($row = $result->fetch_assoc()) {
            $active = $slideIndex === 0 ? 'active' : '';
            echo '<div class="carousel-item ' . $active . '">';
            echo '<div class="container-fluid announce p-5 opacity-75 bg-light">';
            echo '<div class="row">';
            echo '<div class="col">';
            echo '<p class="fs-1 fw-bold text-center text-dark">ANNOUNCEMENT WALL</p>';
            echo '<div class="carousel-announcement announcement mx-auto d-block fs-3 text-justify-center">';
            echo '<p>' . $row['anc_cont'] . '</p>';
            echo '<p>Date: ' . $row['anc_date'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            $slideIndex++;
        }
        $conn->close();
        ?>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container-fluid">
        <div class="cont_main">
            <div class="row">
                <div class="card">
                    <h1 style="margin-top:30px; margin-left:10px;text-align:center;"><strong>WELCOME TO THE PURCHASING
                            OFFICE</strong></h1>
                    <section class="main">
                        <div class="container">
                            <div class="row">
                                <h3 class="text-center"><strong>The gateway to sourcing high-quality products.</strong>
                                </h3>
                                <br> <br>
                                <span class="text-center">Together, we strive to support the mission of providing
                                    top-notch education and a conducive learning environment for our students.</span>
                                </span>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <section class="gallery">

        <div class="container mt-5 text-light">

            <div class="row">

                <div class="col-md">
                    <img class=" w-100 gallery_img" src="includes/img/gallery1.jpg" alt="">
                </div>

                <div class="col-md-5">
                    <img class="mx-auto d-flex align-middle  mb-4 w-100 gallery_img g2" src="includes/img/gallery2.jpeg"
                        alt="">
                    <img class="mx-auto d-flex align-middle w-100 gallery_img g3" src="includes/img/gallery3.jpg"
                        alt="">
                </div>

            </div>

            <div class="container p-0">
                <div class="row mx-auto">
                    <div class="col p-0">
                        <img class="mx-auto align-middle d-flex  gallery_img g4" src="includes/img/gallery4.jpg" alt="">
                        <span class="gallery_txt">Covered Courts</span></img>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>