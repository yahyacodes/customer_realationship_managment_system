<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../db/db.php"; ?>
<?php include "../functions.php" ?>

<div class="row">
    <div class="col-2">
        <?php include "../includes/sidebar.php" ?>
    </div>

    <div class="col bg-light rounded mt-2 mb-2 ms-4 mx-4">
        <div class="row mb-0">
            <div class="col">
                <p class="fw-bold fs-4">User Profile</p>
            </div>

            <div class="col mt-2 d-flex flex-row-reverse">
                <a href="Users.php">
                    <button class="btn btn-outline-primary">All Users</button>
                </a>
            </div>
        </div>
        <hr class="clearfix w-100">
        <div class="row">
            <div class="col-3">
                <img src="../images/account_user_avator.png" alt=""
                    class="image-thumbnail border mt-2 bg-primary bg-opacity-10" width="200">
            </div>
            <div class="col mt-2">
                <?php

                if(isset($_GET['p_id'])) {
                    $the_user_id = $_GET['p_id'];

            $query = "SELECT * FROM users WHERE user_id = $the_user_id ";

            $select_customer_overview = mysqli_query($connection, $query);

            confirmQuery($select_customer_overview);
            
            while($row = mysqli_fetch_assoc($select_customer_overview)) {
                $user_id = $row['user_id'];
                $username = $row['username'];
                $user_firstname = $row['user_firstname'];
                $user_lastname = $row['user_lastname'];
                $user_email = $row['user_email'];
                $user_role = $row['user_role'];
                $date_recorded = $row['date_recorded'];
            

            echo "<h1 class='fs-1'>$username</h1>";
            echo "<p class='fs-5 ms-4'><i class='bi bi-clock'></i> $date_recorded</p>";
            echo "<ul class='list-group list-group-flush lead'>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>Firstname:
                </span>$user_firstname</li>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>Lastname:
                </span>$user_lastname</li>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>Email Address:
                </span>$user_email</li>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>User Role:
                </span>$user_role</li>";
            echo "</ul>";

        }
        }
        ?>

            </div>
        </div>
    </div>
</div>

<?php include "../includes/footer.php" ?>