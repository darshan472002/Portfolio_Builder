<?php

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient">
<div class="container-fluid">

    <a class="navbar-brand" href="..\login system\home.php"><span class="text-warning">Portfolio</span>Builder</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mx-4" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-3 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="..\login system\home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="..\partial\Services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="..\partial\Template.php">Templates</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="..\partial\Contact.php">Contact</a>
            </li>
        </ul>
        </div>';

if (isset($fetch_info['name']) && $fetch_info['name'] == true) {
    echo '
    <form class="d-flex">
    <p class="text-light my-0">Welcome, ' . $fetch_info['name'] . '                    
    <button class="btn btn-outline-success mx-2"><a href="logout-user.php">Logout</a></button>
    </p>
    </form>
                    ';
}
echo '</div>
</nav>';
?>