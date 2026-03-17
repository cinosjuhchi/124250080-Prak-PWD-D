<?php 
    $base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/';
?>
<nav class="navbar navbar-expand-lg px-sentinel bg-secondary" id="navbar-main">
    <div class="container-fluid w-100 px-0">
    <a class="navbar-brand d-flex gap-2 gap-lg-3 align-items-center" href="<?php echo $base_url; ?>">
        <img src="<?php echo $base_url; ?>assets/images/icon.png" class="navbar-brand-logo" alt="Fly Package Logo">
        <span class="fw-bold mb-0 text-main navbar-brand-text">FLY PACKAGE!</span>
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
        <i class="bi bi-list text-main fs-1"></i>
    </button>
        <div class="collapse navbar-collapse justify-content-end pb-3 pb-lg-0" id="navbarNavDropdown">
        <ul class="navbar-nav gap-2">
        <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo $base_url; ?>">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo $base_url; ?>#about">About</a>
        </li>            
        <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo $base_url; ?>#send-package">Send Package</a>
        </li>
        </ul>
        <a href="<?php echo $base_url; ?>page/form.php" class="btn btn-main ms-lg-3 mt-3 mt-lg-0">
        <i class="bi bi-send-fill me-2"></i>Get Started
        </a>
    </div>        
    </div>
</nav>