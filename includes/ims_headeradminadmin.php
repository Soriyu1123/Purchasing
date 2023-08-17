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
<link rel="stylesheet" href="includes/css/style.css">

<head>
    <title>Purchasing</title>
</head>

<style>
@media print {
    .logout {
        display: none;
    }

    .GNC_Logo {
        width: 50px;
    }
}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="includes/img/Logoo.png" class="GNC_Logo"></img>
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
                            data-bs-toggle="dropdown" aria-expanded="false">Items</a>
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
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Announcement
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="ims_ancwalladmin.php">Add Announcement</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="ims_editanc.php">Update Announcement</a></li>
                            <li>
                            </li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="ims_addUser.php">Users</a>
                    </li>
                    </li>
                </ul>

                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="text" id="search" for="search" onkeyup="filterItems()" placeholder="Search" aria-label="Search">
                </form> -->
            </div>
        </div>
        <div class="nav-item">
            <a class="nav-link logout" style="margin-right: 50px; color:white;" href="login.html">Logout</a>
        </div>
    </nav>
</body>

</html>