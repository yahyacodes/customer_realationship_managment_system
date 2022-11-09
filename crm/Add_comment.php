<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../db/db.php"; ?>
<?php include "../functions.php"; ?>

<div class="row">
    <div class="col-2">
        <?php include "../includes/sidebar.php"?>
    </div>

    <div class="col bg-light rounded mt-2 mb-2 ms-4 mx-4">
        <div class="row mt-2">
            <div class="col">
                <h1 class=" fw-bold">Add Comment</h1>
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
                <label for="customer_name">Subject:</label>
                <input type="text" name="comment_subject" class="form-control">
            </div> <br>

            <div class="form-group">
                <label for="customer_name">Add Comment:</label>
                <textarea name="comment_content" class="form-control" cols="30" rows="10"></textarea>
            </div> <br>

            <div class="form-group">
                <input type="submit" name="add_comment" value="Add Customer" class="btn btn-primary w-100">
            </div>


        </form>


    </div>
</div>

<?php include "../includes/footer.php"; ?>