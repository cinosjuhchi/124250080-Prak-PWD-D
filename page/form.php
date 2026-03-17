<?php
if (isset($_GET['error'])) {
    $error_message = $_GET['error'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Package - Fly Package | Register for Drone Delivery</title>
    <meta name="description" content="Register and send your package with Fly Package drone delivery service. Fast, safe, and hassle-free shipping. Fill out our simple form to get started.">
    <meta name="keywords" content="send package, drone delivery registration, package shipping, express delivery form, autonomous delivery">
    <meta name="author" content="Fly Package">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Send Package - Fly Package">
    <meta property="og:description" content="Register and send your package with our autonomous drone delivery service.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://fly-package.vercel.app/page/form.php">
    <meta property="og:image" content="../assets/images/icon.png">
    <link rel="canonical" href="https://fly-package.vercel.app/page/form.php">
    <link rel="icon" href="../public/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../style/main.css">
  </head>
  <body class="bg-main">
    <?php if (isset($error_message)) : ?>
      <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">        
        <?php echo htmlspecialchars($error_message); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>    
    <nav class="navbar navbar-expand-lg px-sentinel bg-secondary">
      <div class="container-fluid w-100 px-0">
        <a class="navbar-brand d-flex gap-3 align-items-center" href="../index.php">
          <img src="../assets/images/icon.png" width="74" alt="Fly Package Logo">
          <h3 class="fw-bold mb-0 text-main">FLY PACKAGE!</h3>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
          <i class="bi bi-list text-main fs-1"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end pb-3 pb-lg-0" id="navbarNavDropdown">
          <ul class="navbar-nav gap-2">
            <li class="nav-item">
              <a class="nav-link text-white" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../index.php #about">About</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link text-white" href="../index.php#send-package">Send Package</a>
            </li>
          </ul>
          <a href="form.php" class="btn btn-main ms-lg-3 mt-3 mt-lg-0">
            <i class="bi bi-send-fill me-2"></i>Get Started
          </a>
        </div>        
      </div>
    </nav>

    <main class="container py-5">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
          <div class="bg-secondary rounded p-4 p-md-5">
            <div class="text-center mb-5">
              <img src="../assets/images/icon.png" width="80" alt="Fly Package Logo" class="mb-3">
              <h1 class="heading-main text-main display-5">Send Your Package</h1>
              <p class="text-white-50">Fill in the details below to start your drone delivery</p>
            </div>

            <form action="landing.php" method="GET">
              <div class="row g-4">
                <div class="col-12">
                  <h5 class="text-main fw-bold mb-3">
                    <i class="bi bi-person-fill me-2"></i>Account Information
                  </h5>
                </div>

                <div class="col-12 col-md-6">
                  <label for="fullName" class="form-label text-white">Full Name / Company Name</label>
                  <input type="text" class="form-control bg-dark text-white border-0" id="fullName" name="fullName" placeholder="Enter your name" required>
                </div>

                <div class="col-12 col-md-6">
                  <label for="email" class="form-label text-white">Email Address</label>
                  <input type="email" class="form-control bg-dark text-white border-0" id="email" name="email" placeholder="example@email.com" required>
                </div>

                <div class="col-12 col-md-6">
                  <label for="password" class="form-label text-white">Password</label>
                  <input type="password" class="form-control bg-dark text-white border-0" id="password" name="password" placeholder="Create a password" required>
                </div>

                <div class="col-12 col-md-6">
                  <label for="confirmPassword" class="form-label text-white">Confirm Password</label>
                  <input type="password" class="form-control bg-dark text-white border-0" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                </div>

                <div class="col-12 mt-4">
                  <h5 class="text-main fw-bold mb-3">
                    <i class="bi bi-box-seam-fill me-2"></i>Package Details
                  </h5>
                </div>

                <div class="col-12 col-md-6">
                  <label for="packageCount" class="form-label text-white">Number of Packages</label>
                  <input type="number" class="form-control bg-dark text-white border-0" id="packageCount" name="packageCount" placeholder="Enter quantity" min="1" max="100" required>
                </div>

                <div class="col-12 col-md-6">
                  <label for="packageWeight" class="form-label text-white">Total Weight (kg)</label>
                  <input type="number" class="form-control bg-dark text-white border-0" id="packageWeight" name="packageWeight" placeholder="Enter weight" min="0.1" max="50" step="0.1" required>
                </div>

                <div class="col-12 col-md-6">
                  <label for="serviceCategory" class="form-label text-white">Service Category</label>
                  <select class="form-select bg-dark text-white border-0" id="serviceCategory" name="serviceCategory" required>
                    <option value="" disabled selected>Select a service</option>
                    <option value="express">Express Delivery (1-2 hours)</option>
                    <option value="sameday">Same Day Delivery</option>
                    <option value="scheduled">Scheduled Delivery</option>
                    <option value="business">Business Package</option>
                  </select>
                </div>

                <div class="col-12 col-md-6">
                  <label for="subscriptionPlan" class="form-label text-white">Subscription Plan</label>
                  <select class="form-select bg-dark text-white border-0" id="subscriptionPlan" name="subscriptionPlan" required>
                    <option value="" disabled selected>Select a plan</option>
                    <option value="basic">Basic - Free</option>
                    <option value="pro">Pro - Rp 99.000/month</option>
                    <option value="enterprise">Enterprise - Rp 499.000/month</option>
                  </select>
                </div>

                <div class="col-12 mt-4">
                  <h5 class="text-main fw-bold mb-3">
                    <i class="bi bi-star-fill me-2"></i>Membership Options
                  </h5>
                </div>

                <div class="col-12 col-md-6">
                  <label class="form-label text-white">Member Type</label>
                  <div class="d-flex flex-column gap-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="memberType" id="individual" value="individual" required>
                      <label class="form-check-label text-white-50" for="individual">
                        <i class="bi bi-person me-2"></i>Individual
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="memberType" id="business" value="business">
                      <label class="form-check-label text-white-50" for="business">
                        <i class="bi bi-building me-2"></i>Business
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="memberType" id="corporate" value="corporate">
                      <label class="form-check-label text-white-50" for="corporate">
                        <i class="bi bi-briefcase me-2"></i>Corporate
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <label class="form-label text-white">Delivery Priority</label>
                  <div class="d-flex flex-column gap-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="priority" id="standard" value="standard" required>
                      <label class="form-check-label text-white-50" for="standard">
                        <i class="bi bi-clock me-2"></i>Standard
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="priority" id="priority" value="priority">
                      <label class="form-check-label text-white-50" for="priority">
                        <i class="bi bi-lightning me-2"></i>Priority
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="priority" id="urgent" value="urgent">
                      <label class="form-check-label text-white-50" for="urgent">
                        <i class="bi bi-lightning-fill me-2"></i>Urgent
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-12 mt-4">
                  <h5 class="text-main fw-bold mb-3">
                    <i class="bi bi-shield-check me-2"></i>Terms & Agreement
                  </h5>
                </div>

                <div class="col-12">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="termsAgree" name="termsAgree" required>
                    <label class="form-check-label text-white-50" for="termsAgree">
                      I agree to the <a href="#" class="text-main">Terms and Conditions</a> of Fly Package service.
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="privacyAgree" name="privacyAgree" required>
                    <label class="form-check-label text-white-50" for="privacyAgree">
                      I agree to the <a href="#" class="text-main">Privacy Policy</a> and data processing.
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="newsletterAgree" name="newsletterAgree">
                    <label class="form-check-label text-white-50" for="newsletterAgree">
                      Subscribe to our newsletter for updates and promotions.
                    </label>
                  </div>
                </div>

                <div class="col-12 mt-4">
                  <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                    <button type="submit" class="btn btn-main px-5 py-3 fs-5">
                      <i class="bi bi-send-fill me-2"></i>Submit & Send Package
                    </button>
                    <button type="reset" class="btn btn-outline-light px-5 py-3 fs-5">
                      <i class="bi bi-arrow-counterclockwise me-2"></i>Reset Form
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

    <?php include('../component/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>