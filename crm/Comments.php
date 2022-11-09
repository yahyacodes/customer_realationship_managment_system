<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../db/db.php"; ?>

<div class="row">
    <div class="col-2">
        <?php include "../includes/customer_sidebar.php"?>
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
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Yahya Ali</td>
                    <td>Late Payment</td>
                    <td>Paying late this month</td>
                    <td>2022-11-9</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include "../includes/footer.php"; ?>