<?php
include("header.php");
?>

  <main id="main">

    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
			<br>
			<br>
			<br>
          <h3>Farmer's Kit</h3>
        </div>

      </div>
    </section>
   

 <section id="portfolio" class="portfolio">
      <div class="container">


        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
<?php
if(isset($_GET[category_id]))
{
?>
<li data-filter="*" class="filter-active"><?php echo $_GET[category]; ?></li>
<?php
}
else
{
?>
<li data-filter="*" class="filter-active">All kits</li>
<?php
}
?>
			  
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
<?php
$sql = "SELECT * FROM selling_product WHERE status='Active'";
if(isset($_GET['category_id']))
{
	$sql = $sql . " AND category_id='$_GET[category_id]'";
}
  $qsql = mysqli_query($con,$sql);
  while($rs = mysqli_fetch_array($qsql))
  {
?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="imgsellingproduct/<?php echo $rs[product_img1]; ?>" class="img-fluid" alt="" style="width: 100%;height: 300px;">
              <div class="portfolio-info">
                <h4><?php echo $rs[product_name]; ?></h4>
                <p>Price: <?php echo $rs[cost]; ?> per <?php echo $rs[quantity_type]; ?></p>
                <div class="portfolio-links">
                  <a href="displayproductsdetailed.php?productid=<?php echo $rs[0]; ?>" title="More Details" class="btn btn-info"><i class="bx bx-link"></i> View More</a>
                </div>
              </div>
            </div>
          </div>
<?php
}
?>
        </div>

      </div>
    </section>
 
  </main>

<?php
include("footer.php");
?>