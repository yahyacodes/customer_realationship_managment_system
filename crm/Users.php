<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../db/db.php"; ?>

<div class="row">
    <div class="col-2">
        <?php include "../includes/sidebar.php"?>
    </div>

    <div class="col bg-light rounded mt-2 mb-2 ms-4 mx-4">
        <div class="row mt-2">
            <div class="col">
                <h1 class=" fw-bold">All Users</h1>
            </div>
            <div class="col d-flex flex-row-reverse">
                <a href="Add_user.php" class="text-decoration-none text-dark mx-2">
                    <button class="btn btn-outline-primary">Add Users</button>
                </a>
            </div>
        </div>
        <hr class="clearfix w-100">

        <div class="row">
            <div class="col">
                show
                <select name="select" id="">
                    <option value="10">10</option>
                    <option value="10">25</option>
                    <option value="10">50</option>
                    <option value="10">100</option>
                </select>
                entries
            </div>

            <div class="col d-flex flex-row-reverse">
                <div class="input-group mb-3 w-25">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="search" class="form-control" placeholder="Search">
                </div>
            </div>
            <hr class="clearfix w-100">
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Username</th>
                    <th>User Email</th>
                    <th>User role</th>
                    <th>Recorded At</th>
                </tr>
            </thead>
            <tbody>
                <?php

            $query = "SELECT * FROM users LIMIT 10";

            $select_users = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_users)) {
            $user_id = $row['user_id'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $username = $row['username'];
            $user_email = $row['user_email'];
            $user_role = $row['user_role'];
            $date_recorded = $row['date_recorded'];

                echo "<tr>";
                echo "<td><input type='checkbox' name='check_user' id=''></td>";
                echo "<td><a href='Profile.php?source=profile&p_id={$user_id}'
                class='text-decoration-none text-primary fw-bold'>$username</a></td>";
                echo "<td>$user_firstname</td>";
                echo "<td>$user_lastname</td>";
                echo "<td>$user_email</td>";
                echo "<td>$user_role</td>";
                echo "<td>$date_recorded</td>";
                echo "</tr>";
                }

                //p_id = key of the array of the $_GET super global for the ID's


                ?>
            </tbody>
        </table>

        <?php
        
        if(isset($_GET['source'])) {
            $source = $_GET['source'];
        } else {
            $source = '';
        }

        switch($source) {
            case 'edit_user';
            include "Edit_user.php";
            break;

            case 'profile';
            include "Profile.php";
            break;
            
        }

        ?>
    </div>
</div>

<?php include "../includes/footer.php"; ?>

user_id
user_firstname
user_lastname
username
user_email
user_password
user_role