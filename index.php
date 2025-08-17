<?php
  include('db.php');
  $featuredJob = null;

  $stmt = $conn->prepare("SELECT * FROM jobs WHERE job_featured = 1 LIMIT 1");
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result && $result->num_rows > 0) {
      $featuredJob = $result->fetch_assoc();
  }
?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <link rel="icon" href="images/logo.png" type="image/png">

  <title>Crane</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstraps.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/stylez1.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <!-- LOGO (optional) -->
            <span class="brand-text">
              Crane Cali
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#listjobs"> Jobs </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#featuredjob"> Featured Jobs </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#developersquote"> Quotes </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#aboutus"> About Us </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="indicator_box">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
          </ol>
          <div>
            <span>
              /04
            </span>
          </div>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Find a <br>
                      Perfect job <br>
                      for you
                    </h1>
                    <div>
                      <a href="#listjobs">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="img-box">
                    <img src="images/firstpic.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      View The <br>
                      featured job <br>
                      for you
                    </h1>
                    <div>
                      <a href="#featuredjob">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="img-box">
                    <img src="images/secondpic.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Developer's <br>
                      Quotes <br>
                      for you
                    </h1>
                    <div>
                      <a href="#developersquote">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="img-box">
                    <img src="images/thirdpic.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      About <br>
                      Our <br>
                      Company
                    </h1>
                    <div>
                      <a href="#aboutus">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="img-box">
                    <img src="images/fourthpic.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- job section -->
  <section id= "listjobs" class="job_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Available Jobs
          </span>
        </h2>
      </div>
      <div class="tab-content" id="myTabContent">
        <div class="job_board tab-pane fade show active" id="jb-1" role="tabpanel" aria-labelledby="jb-1-tab">
          <div class="content-box">
            <div class="content layout_padding2-top">
              <?php
                include('db.php');
                $result = $conn->query("SELECT * FROM jobs");
                while ($job = $result->fetch_assoc()):
              ?>
              <div class="box job-card">
                <h3>
                  <?php echo htmlspecialchars($job['job_name']); ?>
                </h3>
                <div class="job-details">
                  <p><strong>Description:</strong> <?php echo htmlspecialchars($job['job_description']); ?></p>
                  <p><strong>Salary Range:</strong> <?php echo htmlspecialchars($job['job_salary']); ?></p>
                </div>
                <a href="application_form.php?job_id=<?php echo $job['job_id']; ?>">
                  Apply Now
                </a>
              </div>
              <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end job section -->

  <!-- feature section -->
  <section class="feature_section" id = "featuredjob">
    <div class="container-fluid">
      <div class="row">
        <?php if ($featuredJob): ?>
          <div class="col-md-5 offset-md-1">
            <div class="detail-box">
              <h2>Featured Job</h2>
              <h5><strong><?php echo htmlspecialchars($featuredJob['job_name']); ?></strong></h5>
              <p><?php echo htmlspecialchars($featuredJob['job_description']); ?></p>
              <p><strong>Salary Range:</strong> <?php echo $featuredJob['job_salary']; ?></p>
              <a href="#" class="btn btn-primary mt-3">Apply Now</a>
            </div>
          </div>
          <div class="col-md-6 px-0">
            <div class="img-box">
              <img src="images/feature-img.jpg" alt="Featured Job Image" class="img-fluid">
            </div>
          </div>
        <?php else: ?>
          <div class="col-md-12 text-center">
            <p class="text-muted">No featured job at the moment.</p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- end feature section -->

  <!-- client section -->
  <section class="client_section" id = "developersquote">
    <div class="container layout_padding">
      <div class="heading_container">
        <h2>
          Developer's Quotes
        </h2>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/stryker.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Styker John De Guzman
                </h5>
                <p>
                  A website is not just a digital presence, it's your brand's voice, 
                  identity, and experience brought to life through code. As developers, 
                  we don’t just build pages—we craft journeys that users can trust, enjoy, and remember.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/lapid.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Sherwin Mae G. Lapid
                </h5>
                <p>
                  Good code is invisible. The better a developer understands the problem, 
                  the more seamless the solution feels. A true website developer knows that the goal isn’t just 
                  clean syntax—it’s creating something that makes life easier for the people using it.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/estorba.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Mark John M. Estorba
                </h5>
                <p>
                  Behind every well-designed website lies a thousand decisions—on structure, 
                  speed, usability, and accessibility. It’s not just about making things work; 
                  it’s about making them work for everyone, everywhere, on any device.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- info section -->
  <section class="info_section layout_padding2-bottom layout_padding-top" id = "aboutus">
    <div class="container info_content">

      <div>
        <div class="row">
          <div class="col-md-3 about_links">
            <div class="d-flex">
              <h5>
                About Us
              </h5>
            </div>
            <div class="d-flex ">
              <ul>
                <li>
                  <a href="">
                    About Us
                  </a>
                </li>
                <li>
                  <a href="">
                    About services
                  </a>
                </li>
                <li>
                  <a href="">
                    About
                  </a>
                </li>
                <li>
                  <a href="">
                    Services
                  </a>
                </li>
                <li>
                  <a href="">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="d-flex">
              <h5>
                Jobs
              </h5>
            </div>
            <div class="d-flex ">
              <ul>
                <li>
                  <a href="">
                    We're always looking for passionate and
                  </a>
                </li>
                <li>
                  <a href="">
                    creative web developers to join our team
                  </a>
                </li>
                <li>
                  <a href="">
                    if you're ready to build the future of the web
                  </a>
                </li>
                <li>
                  <a href="">
                    with us, let's connect.
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="d-flex">
              <h5>
                Services
              </h5>
            </div>
            <div class="d-flex ">
              <ul>
                <li>
                  <a href="">
                    We offer end-to-end freight solutions including
                  </a>
                </li>
                <li>
                  <a href="">
                    shipment booking, real-time cargo
                  </a>
                </li>
                <li>
                  <a href="">
                    tracking, route optimization,
                  </a>
                </li>
                <li>
                  <a href="">
                    warehouse management, and driver monitoring.
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-3  mt-2">
          <div class="social-box">
            <a href="https://www.facebook.com/FreightSystem#SamplePage" target="_blank">
              <img src="images/fb.png" alt="" />
            </a>

            <a href="https://www.x.com/FreightSystem#SamplePage" target="_blank">
              <img src="images/twitter.png" alt="" />
            </a>
            <a href="https://www.linkedin.com/FreightSystem#SamplePage" target="_blank">
              <img src="images/linkedin.png" alt="" />
            </a>
            <a href="https://www.instagram.com/FreightSystem#SamplePage" target="_blank">
              <img src="images/insta.png" alt="" />
            </a>
          </div>

        </div>
        <div class="col-lg-9">
          <div class="form_container mt-2">
            <form action="">
              <label for="subscribeMail">
                Newsletter
              </label>
              <input type="email" placeholder="Enter Your email" id="subscribeMail" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      Crane And Trucking Management System
      <!--&copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
      -->
    </p>
  </footer>
  <!-- footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstraps.js"></script>

</body>
</html>