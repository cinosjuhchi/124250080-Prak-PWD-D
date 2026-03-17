<?php 
    $base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/';
?>
<footer class="bg-secondary py-5">
    <div class="container-fluid px-sentinel">
    <div class="row g-4">

        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
        <a class="d-flex gap-3 align-items-center text-decoration-none mb-3" href="#banner">
            <img src="<?php echo $base_url; ?>assets/images/icon.png" width="64" alt="Fly Package Logo">
            <h4 class="fw-bold mb-0 text-main">FLY PACKAGE!</h4>
        </a>
        <p class="text-white-50 mb-3">Revolutionizing logistics with autonomous drone delivery. Fast, safe, and reliable — the future of shipping is here.</p>
        <div class="d-flex gap-3">
            <a href="https://www.instagram.com/cino.incourt/" target="_blank" rel="noopener noreferrer" class="text-main fs-4">
            <i class="bi bi-instagram"></i>
            </a>
            <a href="https://github.com/cinosjuhchi" target="_blank" rel="noopener noreferrer" class="text-main fs-4">
            <i class="bi bi-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/cino-id/" target="_blank" rel="noopener noreferrer" class="text-main fs-4">
            <i class="bi bi-linkedin"></i>
            </a>
        </div>
        </div>
        
        <div class="col-6 col-md-4 col-lg-2">
        <h6 class="text-main fw-bold mb-3">Explore</h6>
        <ul class="list-unstyled">
            <li class="mb-2"><a href="<?php echo $base_url; ?>" class="text-white-50 text-decoration-none">Home</a></li>
            <li class="mb-2"><a href="<?php echo $base_url; ?>#about" class="text-white-50 text-decoration-none">About</a></li>       
            <li class="mb-2"><a href="<?php echo $base_url; ?>#send-package" class="text-white-50 text-decoration-none">Send Package</a></li>
        </ul>
        </div>
        
        <div class="col-6 col-md-4 col-lg-2">
        <h6 class="text-main fw-bold mb-3">Services</h6>
        <ul class="list-unstyled">
            <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Express Delivery</a></li>
            <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Same Day</a></li>
            <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Scheduled</a></li>
            <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Business</a></li>
        </ul>
        </div>          

        <div class="col-12 col-md-4 col-lg-4">
        <h6 class="text-main fw-bold mb-3">Contact Us</h6>
        <ul class="list-unstyled">
            <li class="mb-2 text-white-50">
            <i class="bi bi-geo-alt-fill text-main me-2"></i>Jl. Drone Tech No. 123, Jakarta
            </li>
            <li class="mb-2 text-white-50">
            <i class="bi bi-envelope-fill text-main me-2"></i>hello@fly-package.vercel.app
            </li>
            <li class="mb-2 text-white-50">
            <i class="bi bi-telephone-fill text-main me-2"></i>+62 877 3276 2247
            </li>
        </ul>
        </div>
    </div>
    
    <hr class="border-secondary my-4">
    
    <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center text-md-start">
        <p class="text-white-50 mb-0">&copy; 2026 Fly Package. All rights reserved.</p>
        </div>
        <div class="col-12 col-md-6 text-center text-md-end mt-3 mt-md-0">
        <a href="#" class="text-white-50 text-decoration-none me-3">Privacy Policy</a>
        <a href="#" class="text-white-50 text-decoration-none">Terms of Service</a>
        </div>
    </div>
    </div>
</footer>