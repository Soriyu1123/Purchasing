<?php
require('includes/ims_headeradminadmin.php');
require('includes/ims_connection.php');

$run = mysqli_query($conn, "select * from `accounts`");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>

<style>
body{
    background-image:url("img/img1carousel.jpg");
}


.signup-table {
    border-collapse: collapse;
    width: 100%;
}

.signup-table td {
    padding: 5px;
    border: none;
    /* Remove borders from table cells */
}

.signup-table input,
.signup-table select {
    width: 100%;
    padding: 5px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    /* Add a border to input and select elements */
}

.signup-table input[type="submit"] {
    width: auto;
}

.Users,
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
            <div class="card" style="width: 50rem; height: 50rem">
                <div class="col-lg">
                    <div class="card-body">
                        <i class="fa-solid fa-boxes-stacked fa-2xl ml-3 mb-4" style="color: #0f100f;"></i>
                        <h1>Add User</h1>
                        <table class="signup-table">
                            <form action="ims_addAccount.php" method="POST">
                                <tr>
                                    <td><label for="firstname">Firstname:</label></td>
                                    <td><input type="text" name="firstname" required></td>
                                </tr>
                                <tr>
                                    <td><label for="lastname">LastName:</label></td>
                                    <td><input type="text" name="lastname" required></td>
                                </tr>
                                <tr>
                                    <td><label for="password">Password:</label></td>
                                    <td><input type="password" name="password" required></td>
                                </tr>
                                <tr>
                                    <td><label for="username">Username:</label></td>
                                    <td><input type="username" name="username" required></td>
                                </tr>
                                <tr>
                                    <td><label for="role">Position:</label></td>
                                    <td>
                                        <select name="role" required>
                                            <option value="admin">Admin</option>
                                            <option value="staff">Staff</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" value="Add User"></td>
                                </tr>
                            </form>
                        </table>
                        <div class="m-5"></div>
                        <h1>All Users</h1>
                        <table class="items" align="center" border="1" cellspacing="0" cellpadding="0">
                            <tr class="heading">
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>username</th>
                                <th>Password</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>

                            <?php
                                $i = 1;
                                    if ($num = mysqli_num_rows($run) > 0) {
                                        while ($result = mysqli_fetch_assoc($run)) {
                                            echo "
                                    <tr class='data' style='border: 1px solid'> 
                                    <td>" . $result['id'] . "</td>
                                    <td>" . $result['firstname'] . "</td>
                                    <td>" . $result['lastname'] . "</td>      
                                    <td>" . $result['username'] . "</td>    
                                    <td>" . $result['password'] . "</td>
                                    <td>" . $result['role'] . "</td>
                                    <td>
                                    <a href='ims_deleteAdminUsers.php?id=" . $result['id'] . "' id='btn' class='btn m-2 btn-danger'>Delete</a>
                                    </td>  
                                    </tr>";}
                                    }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>