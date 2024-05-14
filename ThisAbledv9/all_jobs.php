<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Jobs</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://unpkg.com/handsfree@8.5.1/build/lib/assets/handsfree.css" />
  <script src="https://unpkg.com/handsfree@8.5.1/build/lib/handsfree.js"></script>

</head>

<?php
	if(!empty($_SESSION['EMP_ID']))
	{ 
		include 'navbar.emp.loggedin.php';
	 }
	 elseif(!empty($_SESSION['SEEK_ID'])){
		include 'navbar.loggedin.php'; 
	 }
	else {	include 'navbar.php';  }
?>
<body style-"margin: 50px;">
<div class="section-tittle text-center">
                            <span>JOBS</span>
                            <h4>All Jobs Available</h4>
                        </div>
	<table class="table">		<thead class="thead-dark">
		<tr>
		  <th scope="col">Name</th>
		  <th scope="col">Profile</th>
		  <th scope="col">Key Skill</th>
		  <th scope="col">Location</th>
		  <th scope="col">CTC</th>
		  <th scope="col">More</th>
		</tr>
	  </thead>	
	
<tbody>
<?php 
	require 'db_connect.php';
	$current_date = date('Y-m-d');
	$query = "SELECT * FROM job_details";
	$query_jobs = mysqli_query($conn,$query);		
	$query_rows_num = mysqli_num_rows($query_jobs);
	if($query_rows_num > 0)
	{		
		while($query_jobs_result = mysqli_fetch_array($query_jobs))
		{	

			echo '<tr>
							<td>'.$query_jobs_result['name'].'</td>
							<td>'.$query_jobs_result['profile'].'</td>
							<td>'.$query_jobs_result['key_skill'].'</td>
							<td>'.$query_jobs_result['location'].'</td>
							<td>'.$query_jobs_result['ctc'].'</td>
							<td>
							<a class= "btn btn-primary btn-sm"  href= "search.jobs.view.php" onClick="MyWindow=window.open('."'search.jobs.view.php?id="
							.$query_jobs_result['id']."', '_window');".'return false;"> Apply </a> 
							</td>
						</tr>';
			}
	}
    
?>
    </tbody>
	<script> 
  const handsfree = new Handsfree({weboji: true})
  handsfree.enablePlugins('browser')
handsfree.start()
handsfree.on('pose', (pose) => {
  // Check if the user is looking up
  if (pose.rotation[0] < -50) {
    // Scroll up
    window.scrollBy(0, -10);
  }
  
  // Check if the user is looking down
  if (pose.rotation[0] > 50) {
    // Scroll down
    window.scrollBy(0, 10);
  }
  
  // Check if the user is smiling
  if (pose.expressions.smile > 0.5) {
  // Get the x and y coordinates of the smile
  const [x, y] = pose.annotations.lipsUpperInner[3];
  
  // Get the element at the position of the smile
  const element = document.elementFromPoint(x, y);
  
  // Trigger a click event on the element
  if (element) {
    element.dispatchEvent(new MouseEvent('click', {
      bubbles: true,
      cancelable: true,
      view: window
    }));
  }
}

});
</script>

<!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/price_rangs.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>



    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
					</table>
					<?php 
					    include 'footer.php';
						?>
						
</body>
</html>