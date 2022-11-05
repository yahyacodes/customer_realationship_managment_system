<?php include "../includes/header.php"; ?>

<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand text-light">CRM System</a>
        <button class="navbar-toggler bg-light" type="button" id="btn-toggle">
            <span class="navbar-toggler-icon bg-light"></span>
        </button>

        <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navmenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-decoration-none text-light">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="p-5 mt-5">
    <div class="container p-5">
        <form action="" method="post" class="form-control w-75 ms-5">

            <label for="user_email">Email:</label>
            <input type="text" name="user_email" class="form-control mb-3">

            <label for="user_email">PAssword:</label>
            <input type="password" name="user_password" class="form-control mb-3">

            <input type="submit" name="submit" value="Submit" class="form-control bg-primary text-light mb-3">

        </form>
    </div>
</section>

<script>
$("#btn-toggle").click(function() {
    $("#navmenu").toggle()
})

$("#navmenu").click(function() {
    $("#navmenu").hide()
})
</script>