<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['role'] )) {
    header("Location: login.html");
    exit();
}
if ($_SESSION['role'] === 'staff') {
} else if ($_SESSION['role'] === 'admin')
?>

<!DOCTYPE html>
<html>
<!-- Bootstrap 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- Css -->
<link rel="stylesheet" href="includes/css/memo.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<script>
function validateText(input) {
    input.value = input.value.replace(/[^A-Za-z\s]/g, '');
}
</script>

<head>
    <title>Purchasing</title>
</head>

<body>
    <!-- HEADER -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="includes/img/Logoo.png" class="GNC_Logo" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="ims_adminadmin.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="ims_addItems.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="fasle">Items</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li><a class="dropdown-item" href="ims_addItems.php">Add Items</a></li>
                            <li><a class="dropdown-item" href="ims_printItems.php">Print Items</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="ims_printItems.php">Junior High School</a></li>
                            <li><a class="dropdown-item" href="ims_printItems.php">Senior High School</a></li>
                            <li><a class="dropdown-item" href="ims_printItems.php">Montessori</a></li>
                            <li><a class="dropdown-item" href="ims_printItems.php">College</a></li>
                        </ul>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="fasle">
                            Announcement
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="ims_ancwalladmin.php">Add Announcement</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="ims_editanc.php">Update Announcement</a></li>
                            <li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ims_addUser.php">Users</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="nav-item">
            <a class="nav-link" style="margin-right: 50px; color:white;" href="login.html">Logout</a>
        </div>
    </nav>


    <!-- Memo Note Section -->
    <div class="container">
        <div class="section">
            <h1 style="color: white; text-align: center"><strong>Welcome to the Admin Panel</strong></h1>
            <p style="color: white; text-align: center">Here you can manage admin tasks.</p>
            <div class="popup-box">
                <div class="popup">
                    <div class="content">
                        <header>
                            <p></p>
                            <i class="uil uil-times"></i>
                        </header>
                        <form action="#">
                            <div class="row title">
                                <label>Title</label>
                                <input type="text" spellcheck="false" oninput="validateText(this)">
                            </div>
                            <div class="row description">
                                <label>Description</label>
                                <textarea spellcheck="false"></textarea>
                            </div>
                            <button></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <li class="add-box">
                    <div class="icon"><i class="uil uil-plus"></i></div>
                    <p>Add new note</p>
                </li>
            </div>
        </div>
    </div>
</body>

</html>