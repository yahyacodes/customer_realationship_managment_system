<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../db/db.php"; ?>
<?php include "../functions.php" ?>

<div class="row">
    <div class="col-2">
        <?php include "../includes/customer_sidebar.php" ?>
    </div>

    <div class="col bg-light rounded mt-2 mb-2 ms-4 mx-4">
        <div class="row mb-0">
            <div class="col">
                <p class="fw-bold fs-4">Overview</p>
            </div>

            <div class="col mt-2 d-flex flex-row-reverse">
                <a href="Make_payment.php">
                    <button class="btn btn-outline-primary">Make Payment</button>
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
                    $the_customer_id = $_GET['p_id'];

            $query = "SELECT * FROM customers WHERE customer_id = $the_customer_id ";

            $select_customer_overview = mysqli_query($connection, $query);

            confirmQuery($select_customer_overview);
            
            while($row = mysqli_fetch_assoc($select_customer_overview)) {
                $customer_id = $row['customer_id'];
                $customer_name = $row['customer_name'];
                $customer_email = $row['customer_email'];
                $customer_phone_number = $row['customer_phone_number'];
                $customer_id_number = $row['customer_id_number'];
                $customer_gender = $row['customer_gender'];
                $customer_plot_name = $row['customer_plot_name'];
                $customer_house_number = $row['customer_house_number'];
                $date_recorded = $row['date_recorded'];
            

            echo "<h1 class='fs-1'>$customer_name</h1>";
            echo "<p class='fs-5 ms-4'><i class='bi bi-clock'></i> $date_recorded</p>";
            echo "<ul class='list-group list-group-flush lead'>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>Email Address:
                </span>$customer_email</li>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>Phone Number:
                </span>$customer_phone_number</li>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>ID Number:
                </span>$customer_id_number</li>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>Gender:
                </span>$customer_gender</li>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>Plot Name:
                </span>$customer_plot_name</li>";
            echo "<li class='list-group-item fs-4'><span class='fw-bold'>House Number:
                </span>$customer_house_number</li>";
            echo "</ul>";

        }
        }
        ?>

            </div>
        </div>

        <table class="table table-striped table-bordered mt-5">
            <thead>
                <tr>
                    <th>Amount</th>
                    <th>Payment Method</th>
                    <!-- <th>Status</th> -->
                    <!-- <th>Maturity Date</th> -->
                    <th>Recorded At</th>
                </tr>
            </thead>
            <tbody>

                <?php

        $query = "SELECT * FROM payments ";

        $select_customer_payment = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_customer_payment)) {
        $payment_id = $row['payment_id'];
        $amount_paid = $row['amount_paid'];
        $dollar_value = $row['dollar_value'];
        $payment_ref = $row['payment_ref'];
        $payment_method = $row['payment_method'];
        $date_recorded = $row['date_recorded'];

        echo "<tr>";
        echo "<td>$amount_paid</td>";
        echo "<td>$payment_method</td>";
        echo "<td>$date_recorded</td>";
        echo "</tr>";
        }

    //p_id = key of the array of the $_GET super global for the ID's


    ?>
                <tr>
                    <td>2000 ksh</td>
                    <td>Cash</td>
                    <!-- <td>Cleared</td>
                    <td>2022-11-21</td> -->
                    <td>2022-11-9</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include "../includes/footer.php" ?>