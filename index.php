<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fly Package - Fast Drone Delivery Service</title>
    <meta name="description" content="Experience the future of logistics with Fly Package. Fast, safe, and reliable autonomous drone delivery service. No traffic, no delays—just smarter delivery.">
    <meta name="keywords" content="drone delivery, fast shipping, autonomous delivery, package delivery, aerial logistics, same day delivery, express delivery">
    <meta name="author" content="Fly Package">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Fly Package - Fast Drone Delivery Service">
    <meta property="og:description" content="Deliver your packages fast through the sky with autonomous drone technology.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://fly-package.vercel.app">
    <meta property="og:image" content="assets/images/icon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Fly Package - Fast Drone Delivery Service">
    <meta name="twitter:description" content="Deliver your packages fast through the sky with autonomous drone technology.">
    <link rel="canonical" href="https://fly-package.vercel.app">
    <link rel="icon" href="public/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style/main.css">
  </head>
  <body>    
    <?php include('component/nav.php'); ?>
    <section class="container-fluid banner position-relative d-flex flex-column justify-content-between p-0" id="banner">
      <div class="banner__background-video position-absolute top-50 start-50 translate-middle w-100">
        <video class="banner__video" src="assets/videos/banner-video.mp4" autoplay muted loop></video>
      </div>
      <div class="banner__heading d-flex justify-content-center py-5 position-relative z-3">
        <img src="assets/images/logo_transparan.png" class="banner__logo" width="180" alt="Fly Package Banner Logo">
      </div>
      <div class="banner__heading d-flex flex-column align-items-center py-5 position-relative z-3">
        <h1 class="text-center text-white banner__slogan mb-5">Deliver your Packages<br>Fast through the Sky!</h1>
        <a role="button" href="#content" class="btn btn-main w-auto rounded fs-5 px-3">Click to Explore</a>
      </div>
      <div class="banner__heading d-flex justify-content-center py-5 position-relative z-3">
        <div class="social-links d-flex gap-5 rounded-pill">
          <a href="https://www.instagram.com/cino.incourt/" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-instagram fs-3 social-links__icon"></i>
          </a>
          <a href="https://github.com/cinosjuhchi" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-github fs-3 social-links__icon"></i>
          </a>
          <a href="https://www.linkedin.com/in/cino-id/" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-linkedin fs-3 social-links__icon"></i>
          </a>
        </div>
      </div>
    </section>

    <main class="bg-main" id="content">
      <section class="about row justify-content-center w-100 position-relative" id="about">        
        <div class="about__content col-lg-6 col-sm-12 px-sentinel py-sentinel">
          <h1 class="display-3 heading-main text-secondary">LET'S FLY UP<br>YOUR PACKAGE!</h1>
        </div>
        <div class="about__content bg-secondary col-lg-6 col-sm-12 px-sentinel py-sentinel d-flex flex-column align-items-end">
          <p class="text-main text-end">Welcome to the next generation of logistics. FLY PACKAGE leverages advanced aerial technology to bridge the gap between businesses and customers. Our mission is to provide a seamless, on-demand delivery experience that is precise, cost-effective, and entirely autonomous. No traffic, no delays—just smarter delivery.</p>
          <a class="btn btn-main" href="#send-package">GET IN TOUCH WITH US!</a>
        </div>
        <img src="assets/images/icon.png" style="width: 184px; top: 70px;" class="position-absolute d-none d-lg-block shadow rounded" alt="" srcset="">
      </section>
      <section class="container-fluid px-sentinel py-sentinel row align-items-center justify-content-center" id="status">
        <div class="col-12">
          <h1 class="text-center heading-main display-3 text-secondary">What We've Completed</h1>
          <p class="text-secondary text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, error!</p>
        </div>
        <div class="row justify-content-center py-lg-5">
          <div class="col-12 col-lg-4 d-flex align-items-center flex-column mb-5 mb-lg-0 px-0">
            <i class="bi bi-boxes fs-1 mb-3"></i>
            <p class="text-secondary text-center fs-5">100% Safety Rate</p>
          </div>
          <div class="col-12 col-lg-4 d-flex align-items-center flex-column px-0 mb-5 mb-lg-0">
            <i class="bi bi-box2-heart fs-1 mb-3"></i>
            <p class="text-secondary text-center fs-5">500+ Deliveries Completed</p>
          </div>
          <div class="col-12 col-lg-4 d-flex align-items-center flex-column px-0">
            <i class="bi bi-clock-history fs-1 mb-3"></i>
            <p class="text-secondary text-center fs-5">15 min Average Delivery Time</p>
          </div>          
        </div>
      </section>
      <section class="container-fluid px-sentinel py-sentinel bg-secondary">
        <h1 class="text-center display-3 heading-main text-main">How it Works</h1>
        <div class="banner__heading w-100 d-flex justify-content-between px-3 px-md-5 px-lg-sentinel align-items-center gap-2 gap-md-4 mt-5 mb-5">
          <div class="d-flex flex-column align-items-center">
            <i class="bi bi-box-seam text-main fs-1 fs-md-1" title="Asal Paket"></i>
            <p class="text-main text-center">Origin</p>
          </div>
          <img src="assets/images/icon_partition.png" class="work__logo img-fluid" style="width: clamp(80px, 15vw, 180px);" alt="Fly Package Banner Logo">
          <div class="d-flex flex-column align-items-center">
            <i class="bi bi-geo-alt-fill text-main fs-1 fs-md-1" title="Lokasi Tujuan"></i>
            <p class="text-main text-center">Destination</p>
          </div>
        </div>
        <div class="row justify-content-center g-3">
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="h-100 p-5 text-center list-card rounded">
              <i class="bi bi-card-checklist display-3 heading-main text-main"></i>
              <h1 class="heading-main text-main text-center">ORDER</h1>
              <p class="text-main text-center">Pick your items and destination.</p>
              <div class="description overflow-y-hidden">
                <p class="text-center text-description text-white fs-6">Select your desired products through our intuitive interface and pinpoint your exact location using our high-precision GPS integration. Our system automatically calculates the most efficient flight path to ensure your delivery is prioritized.</p>
              </div>
              <i class="bi bi-arrow-down-circle text-main fs-2 btn-description"></i>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="h-100 p-5 text-center list-card rounded">
              <i class="bi bi-airplane-engines display-3 heading-main text-main"></i>
              <h1 class="heading-main text-main text-center">FLY</h1>
              <p class="text-main text-center">Our drone takes off from the nearest hub.</p>
              <div class="description overflow-y-hidden">
                <p class="text-center text-description text-white fs-6">Once confirmed, an autonomous drone is dispatched from the closest distribution hub. Equipped with advanced obstacle avoidance sensors and AI-driven navigation, it cruises through the sky, bypassing ground traffic and urban congestion.</p>
              </div>              
              <i class="bi bi-arrow-down-circle text-main fs-2 btn-description"></i>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="h-100 p-5 text-center list-card rounded">
              <i class="bi bi-send-check display-3 heading-main text-main"></i>
              <h1 class="heading-main text-main text-center">RECEIVE</h1>
              <p class="text-main text-center">Package is dropped safely at your doorstep</p>
              <div class="description overflow-y-hidden">
                <p class="text-center text-description text-white fs-6">Track your drone’s progress in real-time on the app. Upon arrival, the drone uses precision-landing sensors to safely lower your package at the designated drop-off point. No human contact is required—just a seamless, futuristic delivery experience.</p>
              </div>
              <i class="bi bi-arrow-down-circle text-main fs-2 btn-description"></i>
            </div>
          </div>
        </div>
      </section>
      <section class="container-fluid px-sentinel py-sentinel bg-main text-center" id="send-package">
        <h1 class="display-3 heading-main text-secondary mb-4">Ready to Fly Your Package?</h1>
        <p class="text-secondary fs-5 mb-5">Experience the future of delivery. Fill out our simple form and let our drones handle the rest. Fast, safe, and hassle-free shipping awaits!</p>
        <div class="d-flex justify-content-center">
          <a href="page/form.page" class="btn btn-secondary px-5 py-3 fs-4">
            <i class="bi bi-send-fill me-2"></i>Send Package Now
          </a>
        </div>
      </section>
    </main>
    
    <?php include('component/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="script/main.js"></script>
  </body>
</html>