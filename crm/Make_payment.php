<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../db/db.php"; ?>
<?php include "../functions.php" ?>

<div class="row">
    <div class="col-2">
        <?php include "../includes/sidebar.php"?>
    </div>

    <div class="col bg-light rounded mt-2 mb-2 ms-4 mx-4">
        <p class="fw-bold mt-2 fs-4">Record Payment</p>
        <hr class="clearfix w-100">

        <?php



    if(isset($_POST['submit'])) {
        $payment_id = $_POST['payment_id'];
        $amount_paid = $_POST['amount_paid'];
        $dollar_value = $_POST['dollar_value'];
        $payment_method = $_POST['payment_method'];
        $date_recorded = date('d-m-y');

        $query = "INSERT INTO payments(payment_id, amount_paid, dollar_value, payment_method, date_recorded) ";
        $query .= "VALUES('{$payment_id}', '{$amount_paid}', '{$dollar_value}', '{$payment_method}', now() ) ";

        $payment_query = mysqli_query($connection, $query);

        confirmQuery($payment_query);
        
        
    }

?>

        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="amount" class="fw-bold">Amount Paid</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-cash"></i></span>
                        <input type="number" class="form-control" placeholder="Amount Paid" name="amount_paid">
                    </div>
                </div>

                <div class="col">
                    <label for="dollar" class="fw-bold">Dollar Value</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-cash-stack"></i></span>
                        <input type="number" class="form-control" placeholder="Dollar Value" name="dollar_value">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="ref" class="fw-bold">Ref#, Cheque#, Mpesa#, Transaction#</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-sliders"></i></span>
                        <input type="number" class="form-control" name="ref">
                    </div>
                </div>

                <div class="col">
                    <label for="payment_method" class="fw-bold">Payment Method</label>
                    <select name="payment_method" class="form-select">
                        <option value="cash">Cash</option>
                        <option value="mpesa">M-pesa</option>
                        <option value="cheque">Cheque</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex flex-row-reverse">
                    <button class="btn btn-primary w-100" name="submit"><i class="bi bi-check2"></i>Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

<?php include "../includes/footer.php"; ?>