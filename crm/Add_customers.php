<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../db/db.php"; ?>
<?php include "../functions.php"; ?>

<?php

if(isset($_POST['add_customer'])) {
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_phone_number = $_POST['customer_phone_number'];
    $customer_id_number = $_POST['customer_id_number'];
    $customer_gender = $_POST['customer_gender'];
    $customer_plot_name = $_POST['customer_plot_name'];
    $customer_house_number = $_POST['customer_house_number'];
    $date_recorded = date('d-m-y');

    $query = "INSERT INTO customers(customer_name, customer_email, customer_phone_number, customer_id_number,
     customer_gender, customer_plot_name, customer_house_number, date_recorded) ";
    $query .= "VALUES('{$customer_name}', '{$customer_email}', '{$customer_phone_number}', '{$customer_id_number}', '{$customer_gender}', 
    '{$customer_plot_name}', '{$customer_house_number}', now() ) ";

    $add_customer_query = mysqli_query($connection, $query);

    confirmQuery($add_customer_query);
    
    
}

?>

<div class="row">
    <div class="col-2">
        <?php include "../includes/sidebar.php"?>
    </div>

    <div class="col bg-light rounded mt-2 mb-2 ms-4 mx-4">
        <div class="row mt-2">
            <div class="col">
                <h1 class=" fw-bold">Add Customers</h1>
            </div>
            <div class="col d-flex flex-row-reverse">
                <a href="All_customers.php" class="text-decoration-none text-dark">
                    <button class="btn btn-primary">View Customer</button>
                </a>
            </div>
        </div>
        <hr class="clearfix w-100">

        <form action="" method="post" class="mt-5">
            <div class="form-group">
                <label for="customer_name">Name:</label>
                <input type="text" name="customer_name" id="" class="form-control">
            </div> <br>

            <div class="form-group">
                <label for="customer_name">Email:</label>
                <input type="email" name="customer_email" id="" class="form-control">
            </div> <br>

            <div class="form-group">
                <label for="customer_name">Phone Number:</label>
                <input type="number" name="customer_phone_number" id="" class="form-control">
            </div> <br>

            <div class="form-group">
                <label for="customer_name">ID Number:</label>
                <input type="number" name="customer_id_number" id="" class="form-control">
            </div> <br>

            <div class="form-group">
                <label for="customer_name">Gender:</label>
                <select name="customer_gender" id="" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div> <br>

            <div class="form-group">
                <label for="customer_name">Plot Name:</label>
                <input type="text" name="customer_plot_name" id="" class="form-control">
            </div> <br>

            <div class="form-group">
                <label for="customer_name">House Number:</label>
                <input type="text" name="customer_house_number" id="" class="form-control">
            </div> <br>

            <div class="form-group">
                <input type="submit" name="add_customer" value="Add Customer" class="btn btn-primary w-100">
            </div>


        </form>


    </div>
</div>

<?php include "../includes/footer.php"; ?>