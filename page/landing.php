<?php
 if (!isset($_GET['fullName'], $_GET['email'], $_GET['packageCount'], $_GET['packageWeight'], $_GET['subscriptionPlan'], $_GET['memberType'], $_GET['priority'], $_GET['serviceCategory'])) {
     header('Location: form.php?error=Please+fill+in+all+fields');
     exit();
 }
 $data = [];
 $fee = 0;
 foreach ($_GET as $key => $value) {
     $data[$key] = htmlspecialchars($value);
 }
 foreach($data as $key => $value) {
     if (empty($value)) {
         header('Location: form.php?error=Please+fill+in+all+fields');
         exit();
     }
 }

 switch ($data['subscriptionPlan']) {
     case 'basic':
         $subscriptionPlanName = 'Basic';
         break;
     case 'pro':
         $subscriptionPlanName = 'Pro';
         break;
     case 'enterprise':
         $subscriptionPlanName = 'Enterprise';
         break;
     default:
         $subscriptionPlanName = 'Unknown';
 }
 switch ($data['memberType']) {
     case 'individual':
         $memberTypeName = 'Individual';
         break;
     case 'business':
         $memberTypeName = 'Business';
         break;
     case 'corporate':
         $memberTypeName = 'Corporate';
         break;
     default:
         $memberTypeName = 'Unknown';
 }
 switch ($data['priority']) {
     case 'standard':
         $priorityName = 'Standard';
         break;
     case 'priority':
         $priorityName = 'Priority';
         break;
     case 'urgent':
         $priorityName = 'Urgent';
         break;
     default:
         $priorityName = 'Unknown';
 }
 switch ($data['serviceCategory']) {
     case 'express':
         $serviceCategoryName = 'Express Delivery';
         break;
     case 'sameday':
         $serviceCategoryName = 'Same Day';
         break;
     case 'scheduled':
         $serviceCategoryName = 'Scheduled';
         break;
     case 'business':
         $serviceCategoryName = 'Business';
         break;
     default:
         $serviceCategoryName = 'Unknown';
 }

 if ($serviceCategoryName == 'Same Day') {
   $fee += 50000;
      if ($priorityName == 'Standard') {
          $estimatedDelivery = '4-6 hours';
          $fee += 0;
      } elseif ($priorityName == 'Priority') {
          $estimatedDelivery = '2-4 hours';
          $fee += $fee * 0.1;
      } elseif ($priorityName == 'Urgent') {
          $estimatedDelivery = '1-2 hours';
          $fee += $fee * 0.3;
      } else {
          $estimatedDelivery = 'Unknown';
      }
 } else if ($serviceCategoryName == 'Express Delivery') {
   $fee += 30000;
      if ($priorityName == 'Standard') {
          $estimatedDelivery = '1-2 days';
          $fee += 0;
      } elseif ($priorityName == 'Priority') {
          $estimatedDelivery = '12-24 hours';
          $fee += $fee * 0.1;
      } elseif ($priorityName == 'Urgent') {
          $estimatedDelivery = '6-12 hours';
          $fee += $fee * 0.3;
      } else {
          $estimatedDelivery = 'Unknown';
      }

 } else if ($serviceCategoryName == 'Scheduled') {
   $fee += 20000;
      if ($priorityName == 'Standard') {
          $estimatedDelivery = '3-5 days';
          $fee += 0;
      } elseif ($priorityName == 'Priority') {
          $estimatedDelivery = '2-4 days';
          $fee += $fee * 0.1;
      } elseif ($priorityName == 'Urgent') {
          $estimatedDelivery = '1-2 days';
          $fee += $fee * 0.3;
      } else {
          $estimatedDelivery = 'Unknown';
      }
 } else if ($serviceCategoryName == 'Business') {
   $fee += 40000;
      if ($priorityName == 'Standard') {
          $estimatedDelivery = '1-3 days';
          $fee += 0;
      } elseif ($priorityName == 'Priority') {
          $estimatedDelivery = '12-24 hours';
          $fee += $fee * 0.1;
      } elseif ($priorityName == 'Urgent') {
          $estimatedDelivery = '6-12 hours';
          $fee += $fee * 0.3;
      } else {
          $estimatedDelivery = 'Unknown';
      }
 } else {
     $estimatedDelivery = 'Unknown';
     $fee = 0;
 }
 if ($memberTypeName == 'Corporate') {
     $fee *= 0.90;
 } else if ($memberTypeName == 'Business') {
     $fee *= 0.95 ;
 } else {
     $fee -= 0;
 }
 if($subscriptionPlanName == 'Pro') {
     $fee *= 0.95;
 } else if ($subscriptionPlanName == 'Enterprise') {
     $fee *= 0.90;
 } else {
     $fee -= 0;
 }

 $fee = $fee * $data['packageCount'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Successful - Fly Package</title>
    <meta name="description" content="Your package delivery request has been submitted successfully. Track your drone delivery in real-time with Fly Package.">
    <meta name="keywords" content="delivery confirmation, package tracking, drone delivery status, shipping confirmation">
    <meta name="author" content="Fly Package">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="Registration Successful - Fly Package">
    <meta property="og:description" content="Your package delivery request has been submitted successfully.">
    <meta property="og:type" content="website">
    <link rel="icon" href="../public/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../style/main.css">
  </head>
  <body class="bg-secondary min-vh-100 d-flex flex-column">
    <nav class="navbar navbar-expand-lg px-sentinel bg-secondary border-bottom border-dark">
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
              <a class="nav-link text-white" href="../index.php#about">About</a>
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

    <main class="flex-grow-1 d-flex align-items-center justify-content-center py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <div class="text-center">
              <div class="position-relative mb-5">
                <div class="d-flex justify-content-center align-items-center gap-4 gap-md-5">                  
                  <img src="../assets/images/icon_partition.png" class="work__logo img-fluid" style="width: clamp(80px, 15vw, 180px);" alt="Fly Package Drone">                  
                </div>
              </div>

              <div class="bg-dark bg-opacity-50 rounded p-4 p-md-5 mb-4">
                <div class="mb-4">
                  <i class="bi bi-check-circle-fill text-success display-1 mb-3"></i>
                  <h1 class="heading-main text-main display-4 mb-3">Successfully</h1>
                  <p class="text-white fs-5 mb-0">Your package delivery request has been submitted successfully.</p>
                </div>

                <hr class="border-secondary my-4">

                <div class="row g-4 text-start mb-4">
                  <div class="col-12 col-md-6">
                    <div class="d-flex align-items-start gap-3">
                      <i class="bi bi-person-circle text-main fs-3"></i>
                      <div>
                        <h6 class="text-main fw-bold mb-1">Account Information</h6>
                        <p class="text-white-50 mb-0 small"><?php echo $data['fullName']; ?></p>
                        <p class="text-white-50 mb-0 small"><?php echo $data['email']; ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="d-flex align-items-start gap-3">
                      <i class="bi bi-box2 text-main fs-3"></i>
                      <div>
                        <h6 class="text-main fw-bold mb-1">Package Details</h6>
                        <p class="text-white-50 mb-0 small">Quantity: <?php echo $data['packageCount']; ?> packages</p>
                        <p class="text-white-50 mb-0 small">Weight: <?php echo $data['packageWeight']; ?> kg</p>
                        <p class="text-white-50 mb-0 small">Fee: Rp <?php echo number_format($fee, 0, ',', '.'); ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="d-flex align-items-start gap-3">
                      <i class="bi bi-lightning-fill text-main fs-3"></i>
                      <div>
                        <h6 class="text-main fw-bold mb-1">Service Type</h6>
                        <p class="text-white-50 mb-0 small">Category: <?php echo $serviceCategoryName; ?></p>
                        <p class="text-white-50 mb-0 small">Priority: <?php echo $priorityName; ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="d-flex align-items-start gap-3">
                      <i class="bi bi-gem text-main fs-3"></i>
                      <div>
                        <h6 class="text-main fw-bold mb-1">Membership</h6>
                        <p class="text-white-50 mb-0 small">Plan: <?php echo $subscriptionPlanName; ?></p>
                        <p class="text-white-50 mb-0 small">Type: <?php echo $memberTypeName; ?></p>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="border-secondary my-4">

                <div class="border border-secondary rounded p-4 mb-4">
                  <h6 class="text-main fw-bold mb-3">
                    <i class="bi bi-info-circle-fill me-2"></i>What's Next?
                  </h6>
                  <ul class="text-white-50 text-start mb-0 ps-3 small">
                    <li class="mb-2">Check your email for tracking details and order confirmation.</li>
                    <li class="mb-2">Our drone will be dispatched from the nearest hub once your package is ready.</li>
                    <li class="mb-2">Track your delivery in real-time through our mobile app or website.</li>
                    <li>Receive your package safely at your designated drop-off point.</li>
                  </ul>
                </div>

                <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                  <a href="../index.php" class="btn btn-main px-5 py-3 fs-5">
                    <i class="bi bi-house-fill me-2"></i>Back to Home
                  </a>
                  <a href="form.php" class="btn btn-outline-light px-5 py-3 fs-5">
                    <i class="bi bi-plus-circle me-2"></i>Send Another Package
                  </a>
                </div>
              </div>

              <p class="text-white-50 small">
                <i class="bi bi-shield-check me-1"></i>
                Your data is protected and encrypted. We value your privacy.
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="bg-secondary py-4 border-top border-dark">
      <div class="container-fluid px-sentinel">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 text-center text-md-start">
            <a class="d-inline-flex gap-2 align-items-center text-decoration-none" href="../index.php">
              <img src="../assets/images/icon.png" width="40" alt="Fly Package Logo">
              <span class="fw-bold text-main">FLY PACKAGE!</span>
            </a>
          </div>
          <div class="col-12 col-md-6 text-center text-md-end mt-3 mt-md-0">
            <p class="text-white-50 mb-0 small">&copy; 2026 Fly Package. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
