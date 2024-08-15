<?php
include("header.php");
?>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>AgWorld - Change The Way You Trade</h1>
      <h2>Agriculture Management System is to help farmers by providing all kinds agriculture related information in the website.</h2>
      <a href="customerreglogin.php" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-2 col-4 text-center">
            <span data-toggle="counter-up"><?php
$sql = "select * from seller";
$qsql = mysqli_query($con,$sql);
echo mysqli_num_rows($qsql);
			?></span>
            <p>Farmers</p>
          </div>

          <div class="col-lg-2 col-4 text-center">
            <span data-toggle="counter-up"><?php
$sql = "select * from customer";
$qsql = mysqli_query($con,$sql);
echo mysqli_num_rows($qsql);
			?></span>
            <p>Customers</p>
          </div>
		  
          <div class="col-lg-2 col-4 text-center">
            <span data-toggle="counter-up"><?php
$sql = "select * from article";
$qsql = mysqli_query($con,$sql);
echo mysqli_num_rows($qsql);
			?></span>
            <p>Blogs & Articles</p>
          </div>

          <div class="col-lg-2 col-4 text-center">
            <span data-toggle="counter-up"><?php
$sql = "select * from product";
$qsql = mysqli_query($con,$sql);
echo mysqli_num_rows($qsql);
			?></span>
            <p>Farmer's Kit</p>
          </div>

          <div class="col-lg-2 col-4 text-center">
            <span data-toggle="counter-up"><?php
$sql = "select * from selling_product";
$qsql = mysqli_query($con,$sql);
echo mysqli_num_rows($qsql);
			?></span>
            <p>Farmer's Market</p>
          </div>

          <div class="col-lg-2 col-4 text-center">
            <span data-toggle="counter-up"><?php
$sql = "select * from worker";
$qsql = mysqli_query($con,$sql);
echo mysqli_num_rows($qsql);
			?></span>
            <p>Workers</p>
          </div>


        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <h4>Customer</h4>
                    <i class="bx bx-group"></i>
                    <p>Are you willing to purchase products from Farmer's?<br> <b>Login / Register as Customer</b></p>
					<div class="text-center"><button type="button" class="btn btn-info" onclick="window.location='customerreglogin.php'">Click Here</button></div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <h4>Farmer</h4>
                    <i class="bx bx-donate-heart"></i>
                    <p>Online Market where you can Sell fruits & vegetables, agri produce, etc...<br>
					<b>Login / Register as Farmer</b></p>
					<div class="text-center"><button type="button" class="btn btn-info" onclick="window.location='farmerreglogin.php'">Click Here</button></div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <h4>Worker</h4>
                    <i class="bx bx-walk"></i>
                    <p>Find Agriculture Jobs and opportunities.. Farm Worker jobs available here...<br> <b>Login / Register as Worker</b></p>
					<div class="text-center"><button type="button" class="btn btn-info" onclick="window.location='workerreglogin.php'">Click Here</button></div>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


  </main><!-- End #main -->
</body>
  
<?php
include("footer.php");
?>