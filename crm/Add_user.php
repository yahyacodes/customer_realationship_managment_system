<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../db/db.php"; ?>
<?php include "../functions.php"; ?>

<?php

if(isset($_POST['add_user'])) {
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_role = $_POST['user_role'];
    $user_password = $_POST['user_password'];
    $date_recorded = date('d-m-y');

    $query = "INSERT INTO users(user_firstname, user_lastname, username, user_email,
     user_role, user_password, date_recorded) ";
    $query .= "VALUES('{$user_firstname}', '{$user_lastname}', '{$username}', '{$user_email}', '{$user_role}', 
    '{$user_password}', now() ) ";

    $add_users_query = mysqli_query($connection, $query);

    confirmQuery($add_users_query);
    
    
}

?>

<div class="row">
    <div class="col-2">
        <?php include "../includes/sidebar.php"?>
    </div>

    <div class="col bg-light rounded mt-2 mb-2 ms-4 mx-4">
        <div class="row mt-2">
            <div class="col">
                <h1 class=" fw-bold">Add Users</h1>
            </div>
            <div class="col d-flex flex-row-reverse">
                <a href="Users.php" class="text-decoration-none text-dark">
                    <button class="btn btn-primary">View Users</button>
                </a>
            </div>
        </div>
        <hr class="clearfix w-100">

        <form action="" method="post" class="mt-5">
            <div class="form-group">
                <label for="user_firstname">Firstname:</label>
                <input type="text" name="user_firstname" id="" class="form-control">
            </div> <br>

            <div class="form-group">
                <label for="user_lastname">Lastname:</label>
                <input type="text" name="user_lastname" id="" class="form-control">
            </div> <br>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="" class="form-control">
            </div> <br>

            <div class="form-group">
                <label for="user_email">Email:</label>
                <input type="email" name="user_email" id="" class="form-control">
            </div> <br>

            <div class="form-group">
                <label for="user_password">Password:</label>
                <input type="password" name="user_password" id="" class="form-control">
            </div> <br>

            <div class="form-group">
                <label for="user_role">User Role:</label>
                <select name="user_role" id="" class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="Employee">Employee</option>
                </select>
            </div> <br>

            <div class="form-group">
                <input type="submit" name="add_user" value="Add User" class="btn btn-primary w-100">
            </div>


        </form>


    </div>
</div>

<?php include "../includes/footer.php"; ?>