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
                <h1 class=" fw-bold">All Customers</h1>
            </div>
            <div class="col d-flex flex-row-reverse">
                <a href="Add_customers.php" class="text-decoration-none text-dark mx-2">
                    <button class="btn btn-outline-primary">Add Customers</button>
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
                    <th>Customer Name</th>
                    <th>Customer Phone</th>
                    <th>Customer Email</th>
                    <th>Customer Plot</th>
                    <th>Customer Houe</th>
                    <th>Recorded At</th>
                </tr>
            </thead>
            <tbody>
                <?php

            $query = "SELECT * FROM customers LIMIT 10";

            $select_customers = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_customers)) {
            $customer_name = $row['customer_name'];
            $customer_phone_number = $row['customer_phone_number'];
            $customer_email = $row['customer_email'];
            $customer_plot_name = $row['customer_plot_name'];
            $customer_house_number = $row['customer_house_number'];
            $date_recorded = $row['date_recorded'];

            echo "<tr>";
            echo "<td></td>";
            echo "<td><a href='Customer_overview.php' class='text-decoration-none text-primary'>$customer_name</a></td>";
            echo "<td>$customer_phone_number</td>";
            echo "<td>$customer_email</td>";
            echo "<td>$customer_plot_name</td>";
            echo "<td>$customer_house_number</td>";
            echo "<td>$date_recorded</td>";
            echo "</tr>";
        }




            ?>
                <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <td>Mohammed Aden</td>
                    <td>0722908998</td>
                    <td>mohammed@aden.com</td>
                    <td>Alnaima Towers</td>
                    <td>B4</td>
                    <td>2022-11-07</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include "../includes/footer.php"; ?>