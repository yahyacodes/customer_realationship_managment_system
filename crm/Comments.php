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
                <h1 class=" fw-bold">All Comments</h1>
            </div>
            <div class="col d-flex flex-row-reverse">
                <a href="All_customers.php" class="text-decoration-none text-dark mx-2">
                    <button class="btn btn-outline-primary">View Customers</button>
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
                    <th>Subject</th>
                    <th>Comment Content</th>
                    <th>Recorded At</th>
                </tr>
            </thead>
            <tbody>

                <?php

    $query = "SELECT * FROM customer_comments LIMIT 10";

    $select_comments = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_comments)) {
    $comment_id = $row['comment_id'];
    $customer_name = $row['customer_name'];
    $comment_subject = $row['comment_subject'];
    $comment_content = $row['comment_content'];
    $date_recorded = $row['date_recorded'];

    echo "<tr>";
    echo "<td><input type='checkbox' name='check_user' id=''></td>";
    echo "<td><a href='Customer_overview.php?source=customer_overview&comment_id={$comment_id}'
    class='text-decoration-none text-primary fw-bold'>$customer_name</a></td>";
    echo "<td>$comment_subject</td>";
    echo "<td>$comment_content</td>";
    echo "<td>$date_recorded</td>";
    echo "</tr>";
    }

    //p_id = key of the array of the $_GET super global for the ID's


    ?>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Yahya Ali</td>
                    <td>Late Payment</td>
                    <td>Paying late this month</td>
                    <td>2022-11-9</td>
                </tr>
            </tbody>
        </table>

        <?php
        
        if(isset($_GET['source'])) {
            $source = $_GET['source'];
        } else {
            $source = '';
        }

        switch($source) {
            case 'add_comment';
            include "Add_comment.php";
            break;

            case 'customer_overview';
            include "Customer_overview.php";
            break;
            
        }

        ?>

    </div>
</div>

<?php include "../includes/footer.php"; ?>