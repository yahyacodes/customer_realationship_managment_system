<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../db/db.php"; ?>

<div class="row">
    <div class="col-2">
        <?php include "../includes/customer_sidebar.php" ?>
    </div>

    <div class="col bg-light rounded mt-2 mb-2 ms-4 mx-4">
        <div class="row">
            <div class="col-3">
                <img src="../images/account_user_avator.png" alt=""
                    class="image-thumbnail border mt-2 bg-primary bg-opacity-10" width="200">
            </div>
            <div class="col mt-2">
                <?php

            $query = "SELECT * FROM customers LIMIT 10";

            $select_customers = mysqli_query($connection, $query);
            
            while($row = mysqli_fetch_assoc($select_customers)) {
                $customer_name = $row['customer_name'];
                $customer_phone_number = $row['customer_phone_number'];
                $customer_email = $row['customer_email'];
                $customer_plot_name = $row['customer_plot_name'];
                $customer_house_number = $row['customer_house_number'];
                
            echo  "<h1 class='fs-1'>$customer_name</h1>";
            echo "<ul class='list-group list-group-flush lead'>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>Customer Phone: </span>$customer_phone_number</li>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>Customer Phone: </span>$customer_email</li>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>Customer Phone: </span>$customer_plot_name</li>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>Customer Phone: </span>$customer_house_number</li>";
            echo "</ul>";
            }




            ?>
            </div>
        </div>
    </div>
</div>

<?php include "../includes/footer.php" ?>