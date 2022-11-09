<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../db/db.php"; ?>

<div class="row">
    <div class="col-2">
        <?php include "../includes/customer_sidebar.php"?>
    </div>

    <div class="col bg-light rounded mt-2 mb-2 ms-4 mx-4">
        <p class="fw-bold mt-2 fs-4">Record Payment</p>
        <hr class="clearfix w-100">
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
                <div class="col">
                    <label for="cheque" class="fw-bold">Cheque Status</label>
                    <select name="cheque_status" class="form-select" disabled>
                        <option value="cleared">Cleared</option>
                        <option value="uncleared">Uncleared</option>
                    </select>
                </div>

                <div class="col">
                    <label for="ref_status" class="fw-bold">Maturity Date</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-calendar3"></i></span>
                        <input type="number" class="form-control" name="maturity_date" disabled>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col d-flex flex-row-reverse">
                    <button class="btn btn-primary" name="submit" disabled><i class="bi bi-check2"></i>Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

<?php include "../includes/footer.php"; ?>