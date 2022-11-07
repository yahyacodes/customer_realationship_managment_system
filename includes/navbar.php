<?php include "header.php"; ?>

<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <a href="../crm/All_customers.php" class="navbar-brand text-light">CRM System</a>
        <button class="navbar-toggler bg-light" type="button" id="btn-toggle">
            <span class="navbar-toggler-icon bg-light"></span>
        </button>

        <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navmenu">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link text-decoration-none text-light">
                        <i class="bi bi-bell"></i>
                        <span class="translate-middle badge rounded-pill bg-danger">
                            22
                        </span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link text-decoration-none text-light">
                        <i class="bi bi-person-circle"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <i class="bi bi-person"></i>
                            Profile
                        </li>
                        <li class="dropdown-item">
                            <i class="bi bi-gear"></i>
                            Settings
                        </li>
                        <li class="dropdown-item">
                            <i class="bi bi-box-arrow-right"></i>
                            Logout
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>

<script>
$("#btn-toggle").click(function() {
    $("#navmenu").toggle()
})

$("#navmenu").click(function() {
    $("#navmenu").hide()
})
</script>